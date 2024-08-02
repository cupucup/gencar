<?php

namespace App\Http\Controllers;

use App\Models\Disposition;
use Illuminate\Http\Request;
use App\Models\FileUpload;
use RealRashid\SweetAlert\Facades\Alert;

class FileUploadController extends Controller
{
    public function index()
    {
        $fileUploads = FileUpload::all();
        return view('admin.file_uploads.list', compact('fileUploads'));
    }

    // public function create()
    // {
    //     $data['dispositions'] = Disposition::get();
    //     return view('admin.file_uploads.create',$data);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'no_filez' => 'required|string|max:255',
            'date' => 'required|date',
            'date_receipt' => 'required|date',
            'origin' => 'required|string|max:255',
            'regarding' => 'required|string|max:255',
            'file' => 'required|file',
            'status' => 'required'
        ]);
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_' . uniqid() . '.' . $extension; // Generating a unique filename
        $path = $file->storeAs('file', $filename, 'public'); // Storing the file in public/uploads directory

        if ($request->status == 'out') {


            FileUpload::create([
                'no_filez' => $request->no_filez,
                'date' => $request->date,
                'date_receipt' => $request->date_receipt,
                'origin' => $request->origin,
                'regarding' => $request->regarding,
                'name' => $request->name,
                'path' => $path,
                'extension' => $extension,
                'status' => $request->status,
                'disposition_id' => 1,
                'instructions' => "NULL",
            ]);

            Alert::success('Success!', 'File created successfully');
            return redirect()->route('file_uploads.surat_keluar')->with('success', 'File uploaded successfully.');
        } else {

            FileUpload::create([
                'no_filez' => $request->no_filez,
                'date' => $request->date,
                'date_receipt' => $request->date_receipt,
                'origin' => $request->origin,
                'regarding' => $request->regarding,
                'name' => $request->name,
                'path' => $path,
                'extension' => $extension,
                'status' => $request->status,
                'disposition_id' => $request->disposition_id,
                'instructions' => $request->instructions,
                'active' => $request->active
            ]);

            Alert::success('Success!', 'File created successfully');
            return redirect()->route('file_uploads.surat_masuk')->with('success', 'File uploaded successfully.');
        }
    }


    public function show($id)
    {
        $fileUpload = FileUpload::findOrFail($id);
        return view('admin.file_uploads.show', compact('fileUpload'));
    }

    public function edit($id)
    {
        $fileUpload = FileUpload::findOrFail($id);
        $dispositions = Disposition::get();
        return view('admin.file_uploads.edit', compact('fileUpload', 'dispositions'));
    }

    public function update(Request $request, $id)
    {
        $fileUpload = FileUpload::findOrFail($id);

        $request->validate([
            'no_filez' => 'required|string|max:255',
            'date' => 'required|date',
            'date_receipt' => 'required|date',
            'origin' => 'required|string|max:255',
            'regarding' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'file' => 'sometimes|file',
            'status' => 'required'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension; // Generating a unique filename
            $path = $file->storeAs('uploads', $filename, 'public'); // Storing the file in public/uploads directory
            $fileUpload->update([
                'path' => $path,
                'extension' => $extension,
            ]);
        }

        $fileUpload->update([
            'no_filez' => $request->no_filez,
            'date' => $request->date,
            'date_receipt' => $request->date_receipt,
            'origin' => $request->origin,
            'regarding' => $request->regarding,
            'name' => $request->name,
            'status' => $request->status,
            'active' => $request->active
        ]);

        Alert::success('Success!', 'File updated successfully');
        if ($request->status == 'out') {
            return redirect()->route('file_uploads.surat_keluar')->with('success', 'File uploaded successfully.');
        } else {
            return redirect()->route('file_uploads.surat_masuk')->with('success', 'File uploaded successfully.');
        }
    }

    public function destroy($id)
    {
        $fileUpload = FileUpload::findOrFail($id);
        $fileUpload->delete();
        Alert::success('Success!', 'File deleted successfully');
        if ($fileUpload->status == 'out') {
            return redirect()->route('file_uploads.surat_keluar')->with('success', 'File uploaded successfully.');
        } else {
            return redirect()->route('file_uploads.surat_masuk')->with('success', 'File uploaded successfully.');
        }
    }



    public function showSuratMasuk()
    {
        $fileUploads = FileUpload::where('status', 'in')->get();
        $title = 'Surat Masuk';
        return view('admin.file_uploads.list', compact('fileUploads', 'title'));
    }

    public function showSuratKeluar()
    {
        $fileUploads = FileUpload::where('status', 'out')->get();
        $title = 'Surat Keluar';
        return view('admin.file_uploads.list', compact('fileUploads', 'title'));
    }



    public function createSuratMasuk()
    {
        $data['dispositions'] = Disposition::get();
        return view('admin.file_uploads.createSuratMasuk', $data);
    }

    public function createSuratKeluar()
    {
        $data['dispositions'] = Disposition::get();
        return view('admin.file_uploads.createSuratKeluar', $data);
    }
}
