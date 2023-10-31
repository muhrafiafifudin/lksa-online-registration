<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SemuaDataController extends Controller
{
    public function index()
    {
        return view('pages.laporan_pdf.semua-data');
    }

    public function print_pdf(Request $request)
    {
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;

        $siswas = Siswa::whereDate('created_at', '>=', $fromDate)
            ->whereDate('created_at', '<=', $toDate)
            ->get();

        $pdf = PDF::loadView('pages.laporan_pdf.pdf.print-pdf-semua', compact('siswas', 'fromDate', 'toDate'))->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Semua Data_' . $fromDate . '_' . $toDate . '.pdf');
    }
}
