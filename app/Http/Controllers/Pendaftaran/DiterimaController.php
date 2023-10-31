<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

        dd($id);

        $siswa = Siswa::findOrFail($id);
        $siswa->status = 1;
        $siswa->update();

        return redirect()->route('pendaftaran.index');
    }

    public function tidak_diterima($id)
    {
        $id = Crypt::decrypt($id);

        dd($id);

        $siswa = Siswa::findOrFail($id);
        $siswa->status = 2;
        $siswa->update();

        return redirect()->route('pendaftaran.index');
    }
}
