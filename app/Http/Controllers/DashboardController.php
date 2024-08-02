<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $fileUploads = FileUpload::get();

        // Separate the files based on status
        $filesIn = $fileUploads->where('status', 'in');
        $filesOut = $fileUploads->where('status', 'out');

        return view('dashboard', compact('filesIn', 'filesOut'));
    }
}
