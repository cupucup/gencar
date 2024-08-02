<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreResultsRequest;
use App\Http\Requests\UpdateResultsRequest;
use App\Models\Results;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ResultsController extends Controller
{
    public function index()
    {
        $results = Results::all();
        return view('admin.results.index', compact('results'));
    }

    public function create()
    {
        return view('admin.results.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'file' => 'required|file',
                'type' => 'required|in:images,document,video',
            ]);

            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/result'), $fileName);

            Results::create([
                'name' => $request->name,
                'path' => 'uploads/result/' . $fileName,
                'extension' => $file->getClientOriginalExtension(),
                'type' => $request->type,
                'users_id' => auth()->id(),
            ]);

            Alert::success('Sukses', 'Sukses Menambahkan File');
            return redirect()->route('results.index')->with('success', 'File uploaded successfully');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal Menambahkan File: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'File upload failed');
        }
    }

    public function edit(Results $result)
    {
        return view('admin.results.edit', compact('result'));
    }

    public function update(Request $request, Results $result)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'type' => 'required|in:images,document,video',
            ]);

            if ($request->hasFile('file')) {
                if (file_exists(public_path($result->path))) {
                    unlink(public_path($result->path));
                }

                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/result'), $fileName);

                $result->path = 'uploads/result/' . $fileName;
                $result->extension = $file->getClientOriginalExtension();
            }

            $result->name = $request->name;
            $result->type = $request->type;
            $result->save();

            Alert::success('Sukses', 'Sukses Mengupdate File');
            return redirect()->route('results.index')->with('success', 'File updated successfully');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal Mengupdate File: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'File update failed');
        }
    }

    public function destroy(Results $result)
    {
        try {
            if (file_exists(public_path($result->path))) {
                unlink(public_path($result->path));
            }

            $result->delete();

            Alert::success('Sukses', 'Sukses Menghapus File');
            return redirect()->route('results.index')->with('success', 'File deleted successfully');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal Menghapus File: ' . $e->getMessage());
            return redirect()->route('results.index')->with('error', 'File deletion failed');
        }
    }
}
