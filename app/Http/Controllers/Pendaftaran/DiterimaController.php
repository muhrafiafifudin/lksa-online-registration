<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Models\Siswa;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Crypt;

class DiterimaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('status', 1)->get();

        return view('pages.pendaftaran.pendaftaran_diterima', compact('siswa'));
    }

    public function diterima($id)
    {
        $id = Crypt::decrypt($id);

        $siswa = Siswa::findOrFail($id);
        $siswa->status = 1;
        $siswa->update();

        return redirect()->route('pendaftaran.index');
    }

    public function tidak_diterima($id)
    {
        $id = Crypt::decrypt($id);

        $siswa = Siswa::findOrFail($id);
        $siswa->status = 2;
        $siswa->update();

        return redirect()->route('pendaftaran.index');
    }

    public function import_data()
    {
        return view('pages.import_data.import_data');
    }

    public function post_import_data(Request $request)
    {
        Excel::import(new SiswaImport, request()->file('file'));

        return redirect()->route('pendaftaran.index');
    }
}
