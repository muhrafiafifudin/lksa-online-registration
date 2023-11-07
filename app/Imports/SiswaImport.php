<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new Siswa([
        //     'nama_siswa' => $row['Nama Calon Penerima Manfaat'],
        //     'tempat_lahir' => $row['Tempat Lahir'],
        //     'tanggal_lahir' => $row['Tanggal Lahir'],
        //     'alamat' => $row['Alamat Tempat Tinggal'],
        //     'kondisi_siswa' => 1,
        //     'hobby' => $row['Hobi'],
        //     'prestasi_yang_diraih' => $row['Prestasi Yang pernah Diraih'],
        //     'masalah_anak' => 1,
        //     'catatan_khusus' => $row['Riwayat Penyakit Calon Penerima Manfaat'],
        //     'nama_ayah' => $row['Nama Orang Tua / Wali'],
        //     'alamat_ayah' => $row['Alamat Orang Tua / Wali'],
        //     'pekerjaan_ayah' => $row['Pekerjaan Orang Tua / Wali'],
        //     'penghasilan_ayah' => $row['Penghasilan Orang Tua / Wali'],
        //     'no_telp_ayah' => $row['No Telp. Orang Tua / Wali'],
        //     'catatan_khusus_ayah' => $row['Catatan'],
        //     'created_at' => $row['Timestamp'],
        // ]);

        // $dateTimeString = $row[0];
        // dd($row[5]->format('Y-m-d'));
        // $formattedDate = Carbon::createFromFormat('m/d/Y H:i:s', $dateTimeString)->format('Y-m-d H:i:s');

        return new Siswa([
            'nama_siswa' => $row[2],
            'tempat_lahir' => $row[4],
            // 'tanggal_lahir' => $row[5],
            'tanggal_lahir' => Carbon::now(),
            'alamat' => $row[8],
            'kondisi_siswa' => 1,
            'prestasi_yang_diraih' => $row[10],
            'hobby' => $row[11],
            'masalah_anak' => 1,
            'catatan_khusus' => $row[14],
            'nama_ayah' => $row[21],
            'alamat_ayah' => $row[22],
            'pekerjaan_ayah' => $row[23],
            'penghasilan_ayah' => $row[24],
            'no_telp_ayah' => $row[25],
            'catatan_khusus_ayah' => $row[26],
            'created_at' => Carbon::now(),
        ]);
    }
}
