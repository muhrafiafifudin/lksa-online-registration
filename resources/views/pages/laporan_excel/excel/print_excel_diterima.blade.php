<table>
    <tr>
        <td colspan="5" align="center" valign="middle"><strong>LAPORAN SEMUA DATA YANG DITERIMA</strong></td>
    </tr>
    <tr>
        <td colspan="5" align="center" valign="middle"><strong>Dari : {{ $from_date }} Sampai : {{ $to_date }}</strong></td>
    </tr>
    <tr>
        <td colspan="5"></td>
    </tr>
    <tr>
        <td colspan="5"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; width: 50px; font-weight: bold" align="center" valign="middle">No.</td>
        <td style="border: 1px solid black; width: 250px; font-weight: bold" align="center" valign="middle">Nama Calon Penerima Manfaat</td>
        <td style="border: 1px solid black; width: 150px; font-weight: bold" align="center" valign="middle">Tempat Lahir</td>
        <td style="border: 1px solid black; width: 150px; font-weight: bold" align="center" valign="middle">Tanggal Lahir</td>
        <td style="border: 1px solid black; width: 150px; font-weight: bold" align="center" valign="middle">Status</td>
    </tr>

    @php $no = 1; @endphp
    @forelse ($siswa as $data)
        @php
            if ($data->status == 1) {
                $status = 'Diterima';
            } elseif ($data->status == 2) {
                $status = 'Tidak Diterima';
            } else {
                $status = 'Menunggu';
            }
        @endphp

        <tr>
            <td style="border: 1px solid black; width: 50px;" align="center" valign="middle">{{ $no++ }}</td>
            <td style="border: 1px solid black; width: 250px;" valign="middle">{{ $data->nama_siswa }}</td>
            <td style="border: 1px solid black; width: 150px;" align="center" valign="middle">{{ $data->tempat_lahir }}</td>
            <td style="border: 1px solid black; width: 150px;" align="center" valign="middle">{{ $data->tanggal_lahir }}</td>
            <td style="border: 1px solid black; width: 150px;" align="center" valign="middle">{{ $status }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="5" style="border: 1px solid black;" align="center" valign="middle">Data Kosong</td>
        </tr>
    @endforelse
</table>
