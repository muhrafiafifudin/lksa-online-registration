<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiterimaController extends Controller
{
    public function index_pdf()
    {
        return view('pages.laporan_pdf.diterima');
    }

    public function print_pdf(Request $request)
    {
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;

        $siswas = Siswa::where('status', 1)
            ->whereDate('created_at', '>=', $fromDate)
            ->whereDate('created_at', '<=', $toDate)
            ->get();

        $pdf = PDF::loadView('pages.laporan_pdf.pdf.print-pdf-semua', compact('siswas', 'fromDate', 'toDate'))->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Diterima_' . $fromDate . '_' . $toDate . '.pdf');
    }

    public function index_excel()
    {
        return view('pages.laporan_excel.diterima');
    }

    public function print_excel(Request $request)
    {
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;

        $siswas = Siswa::where('status', 1)
            ->whereDate('created_at', '>=', $fromDate)
            ->whereDate('created_at', '<=', $toDate)
            ->get();

        $pdf = PDF::loadView('pages.laporan_excel.pdf.print-excel-semua', compact('siswas', 'fromDate', 'toDate'))->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Diterima_' . $fromDate . '_' . $toDate . '.pdf');
    }
}
