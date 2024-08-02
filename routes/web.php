<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route Website
Route::get('/', [WebsiteController::class, 'home2'])->name('home')->middleware('visitor');
Route::get('/home-2', [WebsiteController::class, 'home'])->name('home2');
Route::get('/surat-keluar', [WebsiteController::class, 'suratKeluar'])->name('surat-keluar');
Route::get('/surat-masuk', [WebsiteController::class, 'suratMasuk'])->name('surat-masuk');
Route::get('/surat-masuk/{bidang}', [WebsiteController::class, 'suratMasukByBidang'])->name('suratMasukByBidang');
Route::get('/visi-misi', [WebsiteController::class, 'visiMisi'])->name('visi-misi');
Route::get('/struktur-organisasi', [WebsiteController::class,'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/tupoksi', [WebsiteController::class, 'tupoksi'])->name('tupoksi');
Route::get('/sekretariat', [WebsiteController::class,'sekretariat'])->name('sekretariat');
Route::get('/bidang-pembangunan-jalan', [WebsiteController::class, 'bidangPembangunanJalan'])->name('bidang-pembangunan-jalan');
Route::get('/bidang-pembangunan-jembatan', [WebsiteController::class, 'bidangPembangunanJembatan'])->name('bidang-pembangunan-jembatan');
Route::get('/bidang-tata-ruang', [WebsiteController::class, 'bidangTataRuang'])->name('bidang-tata-ruang');
Route::get('/profile-reformer', [WebsiteController::class, 'profileReformer'])->name('profile-reformer');
Route::get('/dokumen-proper', [WebsiteController::class, 'dokumenProper'])->name('dokumen-proper');
Route::get('/output', [WebsiteController::class, 'output'])->name('output');
Route::get('/gallery/foto', [WebsiteController::class, 'foto'])->name('foto');
Route::get('/gallery/video', [WebsiteController::class, 'video'])->name('video');
Route::get('/publikasi/gencar-sop-ap', [WebsiteController::class, 'publikasiGencar'])->name('publikasi.gencar');
Route::get('/publikasi/dins-pupr', [WebsiteController::class, 'publikasiDinas'])->name('publikasi.dinas');
Route::get('/publikasi/{id}', [WebsiteController::class,'publikasiDetail'])->name('publikasi.detail');


Route::get('/file_uploads/surat_masuk', function () {
    return redirect('/login');
});
//Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::middleware(['role:admin'])->group(function() {
        Route::get('/admin', function() {
            return view("admin.dashboard");
        })->name('admin.dashboard');
        Route::resource('users', UserController::class);
        Route::resource('file_uploads', FileUploadController::class);


        Route::get('surat_masuk', [FileUploadController::class, 'showSuratMasuk'])->name('file_uploads.surat_masuk');
        Route::get('surat_keluar', [FileUploadController::class, 'showSuratKeluar'])->name('file_uploads.surat_keluar');

        Route::resource('publications', PublicationController::class);
        Route::resource('results', ResultsController::class);
        Route::get('create/surat_masuk', [FileUploadController::class, 'createSuratMasuk'])->name('file_uploads.create_surat_masuk');
        Route::get('create/surat_keluar', [FileUploadController::class, 'createSuratKeluar'])->name('file_uploads.create_surat_keluar');
        Route::post('/publications/upload', [PublicationController::class, 'upload'])->name('publications.upload');
        Route::post('/upload-image', [PublicationController::class, 'upload'])->name('upload.image');

    });



    Route::middleware(['role:user'])->group(function() {
        Route::get('dashboard', [FileUploadController::class, 'index'])->name('dashboard');;
    });

});
