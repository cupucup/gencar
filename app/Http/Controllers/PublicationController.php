<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Category;
use App\Http\Requests\StorePublicationRequest;
use App\Http\Requests\UpdatePublicationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PublicationController extends Controller
{
    public function index()
    {
        try {
            $publications = Publication::latest()->paginate(5);
            return view('admin.publications.index', compact('publications'));
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan saat mengambil data publikasi');
            return redirect()->back();
        }
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.publications.create', compact('categories'));
    }

    public function show($id)
    {
        try {
            $publication = Publication::find($id);

            if (!$publication) {
                return response()->json(['success' => false, 'message' => 'Publikasi tidak ditemukan'], 404);
            }

            return view('admin.publications.show', compact('publication'));
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan saat mengambil data publikasi');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $publication = Publication::find($id);
            $categories = Category::all();

            if (!$publication) {
                return response()->json(['success' => false, 'message' => 'Publikasi tidak ditemukan'], 404);
            }

            return view('admin.publications.edit', compact('publication', 'categories'));
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan saat mengambil data publikasi');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/news'), $imageName);

            $publication = Publication::create([
                'image' => $imageName,
                'title' => $request->title,
                'date' => $request->date,
                'users_id' => auth()->user()->id,
                'category_id' => $request->category_id,
                'content' => $request->content,
            ]);

            Alert::success('Sukses', 'Sukses Menambahkan Publikasi');
            return redirect()->route('publications.index');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan saat menyimpan publikasi');
            return redirect()->back()->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {
            $publication = Publication::find($id);

            if (!$publication) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/news'), $imageName);

                // Delete the old image
                if (file_exists(public_path('uploads/news/' . $publication->image))) {
                    unlink(public_path('uploads/news/' . $publication->image));
                }

                $publication->update([
                    'image' => $imageName,
                    'title' => $request->title,
                    'date' => $request->date,
                    'users_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'content' => $request->content,
                ]);
            } else {
                $publication->update([
                    'title' => $request->title,
                    'date' => $request->date,
                    'users_id' => auth()->user()->id,
                    'category_id' => $request->category_id,
                    'content' => $request->content,
                ]);
            }

            Alert::success('Sukses', 'Sukses Mengedit Publikasi');
            return redirect()->route('publications.index');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan saat mengupdate publikasi');
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $publication = Publication::find($id);
            if (!$publication) {
                return response()->json(['success' => false, 'message' => 'Publikasi tidak ditemukan'], 404);
            }
            Storage::delete('public/news/' . basename($publication->image));
            $publication->delete();

            Alert::success('Sukses', 'Sukses Menghapus Publikasi');
            return redirect()->route('publications.index');
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan saat menghapus publikasi');
            return redirect()->back();
        }
    }

    public function upload(Request $request)
    {
        try {
            if($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;

                $request->file('upload')->move(public_path('uploads'), $fileName);

                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('uploads/'.$fileName);
                $msg = 'Image uploaded successfully';
                $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

                @header('Content-type: text/html; charset=utf-8');
                echo $response;
            }
        } catch (\Exception $e) {
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $msg = 'Error uploading image: ' . $e->getMessage();
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
