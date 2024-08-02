<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use App\Models\User;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    public function home()
    {
        $title = 'Beranda';

        return view('website.home.index', compact('title'));
    }

    public function home2()
    {
        $title = 'Beranda';
        $articles = \App\Models\Publication::all()->take(5);

        return view('website-new.pages.home.index', compact('title', 'articles'));
    }

    public function suratKeluar()
    {
        $title = 'Surat Keluar';
        $fileUploads = FileUpload::where('active', 'yes')->get();

        // Separate the files based on status
        $filesIn = $fileUploads->where('status', 'in');
        $filesOut = $fileUploads->where('status', 'out');

        return view('website-new.arsip.surat-keluar', compact('filesOut', 'filesIn', 'title'));
    }

    public function suratMasuk()
    {
        $title = 'Surat Masuk';
        $fileUploads = FileUpload::where('active', 'yes')->get();

        // Separate the files based on status
        $filesIn = $fileUploads->where('status', 'in');
        $filesOut = $fileUploads->where('status', 'out');

        return view('website-new.arsip.surat-masuk', compact('filesIn','filesOut', 'title'));
    }

    public function suratMasukByBidang($bidang)
    {
        $filesIn = FileUpload::where('status', 'in')->where('disposition_id', $bidang)->get();
        $disposition = \App\Models\Disposition::find($bidang);

        $title = 'Surat Masuk Disposisi '. $disposition->name;

        return view('website-new.arsip.surat-masuk', compact('filesIn', 'title'));
    }

    public function visiMisi()
    {
        $title = 'Visi dan Misi';

        return view('website-new.pages.visi-misi.index', compact('title'));
    }

    public function visiMisi2()
    {
        $title = 'Visi dan Misi';

        return view('website.tentang-kami.visi-misi', compact('title'));
    }

    public function strukturOrganisasi()
    {
        $title = 'Struktur Organisasi';

        return view('website-new.pages.struktur-organisasi.index', compact('title'));
    }

    public function tupoksi()
    {
        $title = 'Tupoksi';

        return view('website.tentang-kami.tupoksi', compact('title'));
    }

    public function sekretariat()
    {
        $title = 'Sekretariat';

        return view('website-new.pages.sekretariat.index', compact('title'));
    }

    public function bidangPembangunanJalan()
    {
        $title = 'Bidang Pembangunan Jalan';

        return view('website-new.pages.bidang-pembangunan-jalan.index', compact('title'));
    }

    public function bidangPembangunanJembatan()
    {
        $title = 'Bidang Pembangunan Jembatan';

        return view('website-new.pages.bidang-pembangunan-jembatan.index', compact('title'));
    }

    public function bidangTataRuang()
    {
        $title = 'Bidang Tata Ruang';

        return view('website-new.pages.bidang-tata-ruang.index', compact('title'));
    }

    public function profileReformer()
    {
        $title = 'Profile Reformer';
        return view('website-new.pages.profile-reformer.index', compact('title'));
    }

    public function dokumenProper()
    {
        $title = 'Dokumen Proper';
        $documents = \App\Models\Results::where('type', 'document')->get();

        return view('website-new.pages.dokumen-proper.index', compact('title', 'documents'));
    }

    public function output()
    {
        $title = 'Output';
        return view('website-new.pages.output.index', compact('title'));
    }

    public function foto()
    {
        $title = 'Foto';
        $gallery = \App\Models\Results::where('type', 'images')->get();

        return view('website-new.pages.foto.index', compact('title', 'gallery'));

    }

    public function video()
    {
        $title = 'Video';
        $gallery = \App\Models\Results::where('type', 'video')->get();
        return view('website-new.pages.video.index', compact('title', 'gallery'));
    }

    public function publikasiGencar()
    {
        $title = 'Publikasi GENCAR SOP-AP';
        $publications = \App\Models\Publication::where('id', 1)->get();

        return view('website-new.pages.publikasi.index', compact('title', 'publications'));
    }

    public function publikasiDinas()
    {
        $title = 'Publikasi Dinas PUPR';
        $publications = \App\Models\Publication::where('id', 2)->get();

        return view('website-new.pages.publikasi.index', compact('title', 'publications'));
    }

    public function publikasiDetail($id)
    {
        $publication = \App\Models\Publication::find($id);
        $title = $publication->title;

        return view('website-new.pages.publikasi.detail', compact('title', 'publication'));
    }
}
