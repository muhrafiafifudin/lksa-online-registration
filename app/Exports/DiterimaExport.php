<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DiterimaExport implements FromView
{
    protected $siswa, $from_date, $to_date;

    public function __construct($siswa, $from_date, $to_date)
    {
        $this->siswa = $siswa;
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function view(): View
    {
        $siswa = $this->siswa;
        $from_date = $this->from_date;
        $to_date = $this->to_date;

        return view('pages.laporan_excel.excel.print_excel_diterima', compact('siswa', 'from_date', 'to_date'));
    }
}
