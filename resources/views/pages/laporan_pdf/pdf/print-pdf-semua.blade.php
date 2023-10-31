<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print PDF</title>
    <style>
        body {
            padding-left: 30px;
            padding-right: 30px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <table width="100%" style="border: none">
        <tr style="border: none">
            <td width="70%" style="border: none; line-height:10px">
                <h2 class="text-center">LKSA Panti Asuhan</h2>
                <p class="text-center">Keluarga Yatim Aisyiyah Bekonang</p>
            </td>
        </tr>
    </table>

    <h3 class="text-center" style="line-height: 10px; margin-top: 5rem">Laporan Semua Data</h3>
    <p class="text-center" style="line-height: 10px; margin-bottom: 3rem">Dari Tanggal : {{ date('d M Y', strtotime($fromDate)) }} Sampai Tanggal : {{ date('d M Y', strtotime($toDate)) }}</p>

    <table width="100%">
        <tr>
            <th>No.</th>
            <th>Nama Calon Penerima Manfaat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
        </tr>

        @php $no = 1; @endphp
        @forelse ($siswas as $siswa)
            @php
                if ($siswa->status == 1) {
                    $status = 'Diterima';
                } elseif ($siswa->status == 2) {
                    $status = 'Tidak Diterima';
                } else {
                    $status = 'Menunggu';
                }
            @endphp

            <tr class="text-center">
                <td>{{ $no++ }}</td>
                <td>{{ $siswa->nama_siswa }}</td>
                <td>{{ $siswa->tempat_lahir }}</td>
                <td>{{ $siswa->tanggal_lahir }}</td>
                <td>{{ $status }}</td>
            </tr>
        @empty
            <tr class="text-center">
                <td colspan="5">Data Kosong</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
