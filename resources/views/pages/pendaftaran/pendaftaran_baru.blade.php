@extends('layouts.app')

@section('title')
    Pendaftaran Calon Penerima Manfaat
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Pendaftaran Calon Penerima Manfaat</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Pendaftaran</li>
                    <li class="breadcrumb-item active">Pendaftaran Calon Penerima Manfaat</li>
                </ol>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Pendaftaran Calon Penerima Manfaat</h5>
                            <span>Lengkapi form dibawah ini untuk mengisi semua data yang diperlukan dalam pendaftaran</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pendaftaran.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <!-- ANAK -->
                                <h6>Identitas Anak</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Anak</label>
                                        <input class="form-control" type="text" name="nama_siswa" placeholder="Masukkan Nama Anak" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama" placeholder="Masukkan Agama" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku" placeholder="Masukkan Suku" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan" placeholder="Masukkan Pendidikan" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan" required>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat" required>
                                    </div>
                                </div>

                                <h6 class="mt-4">Kondisi Anak</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Kondisi Fisik/Psikis</label>
                                        <select class="form-select" name="kondisi_siswa" required>
                                            <option selected disabled>Pilih Kondisi Fisik/Psikis</option>
                                            <option value="1">Normal</option>
                                            <option value="2">Cacat/Terganggu</option>
                                            <option value="3">Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tinggi Badan</label>
                                        <input class="form-control" type="number" name="tinggi_badan" placeholder="Masukkan Tinggi Badan" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Berat Badan</label>
                                        <input class="form-control" type="number" name="berat_badan" placeholder="Masukkan Berat Badan" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Hobby</label>
                                        <input class="form-control" type="text" name="hobby" placeholder="Masukkan Hobby" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Cita - Cita</label>
                                        <input class="form-control" type="text" name="cita_cita" placeholder="Masukkan Cita - Cita" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Prestasi Yang Diraih</label>
                                        <input class="form-control" type="text" name="prestasi_yang_diraih" placeholder="Masukkan Prestasi Yang Diraih" required>
                                    </div>
                                </div>

                                <h6 class="mt-4">Permasalahan Anak</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Kategori Permasalahan</label>
                                        <select class="form-select" name="masalah_anak" required>
                                            <option selected disabled>Pilih Permasalahan</option>
                                            <option value="1">Anak Kurang Mampu</option>
                                            <option value="2">Anak Yatim</option>
                                            <option value="3">Anak Piatu</option>
                                            <option value="4">Anak Yatim Piatu</option>
                                            <option value="5">Anak Terlantar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penyakit Yang Pernah Diderita</label>
                                        <input class="form-control" type="text" name="penyakit_yang_pernah_diderita" placeholder="Masukkan Penyakit Yang Pernah Diderita" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus" placeholder="Masukkan Catatan Khusus/Tambahan" required>
                                    </div>
                                </div>

                                <!-- AYAH -->
                                <h6 class="mt-4">Identitas Ayah</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Ayah</label>
                                        <input class="form-control" type="text" name="nama_ayah" placeholder="Masukkan Nama Ayah" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir_ayah" placeholder="Masukkan Tempat Lahir" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir_ayah" placeholder="Masukkan Tanggal Lahir" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama_ayah" placeholder="Masukkan Agama" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku_ayah" placeholder="Masukkan Suku" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan_ayah" placeholder="Masukkan Pendidikan" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan" required>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat_ayah" placeholder="Masukkan Alamat" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Status Perkawinan</label>
                                        <input class="form-control" type="text" name="status_ayah" placeholder="Masukkan Status Perkawinan" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penghasilan</label>
                                        <input class="form-control" type="number" name="penghasilan_ayah" placeholder="Masukkan Penghasilan" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">No. Telp</label>
                                        <input class="form-control" type="text" name="no_telp_ayah" placeholder="Masukkan No. Telp" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Keberadaan Ayah</label>
                                        <select class="form-select" name="keberadaan_ayah" required>
                                            <option selected disabled>Pilih Keberadaan Ayah</option>
                                            <option value="1">Masih Hidup</option>
                                            <option value="2">Meninggal</option>
                                            <option value="3">Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus_ayah" placeholder="Masukkan Catatan Khusus/Tambahan" required>
                                    </div>
                                </div>

                                <!-- IBU -->
                                <h6 class="mt-4">Identitas Ibu</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Ibu</label>
                                        <input class="form-control" type="text" name="nama_ibu" placeholder="Masukkan Nama Ibu" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir_ibu" placeholder="Masukkan Tempat Lahir" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir_ibu" placeholder="Masukkan Tanggal Lahir" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama_ibu" placeholder="Masukkan Agama" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku_ibu" placeholder="Masukkan Suku" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan_ibu" placeholder="Masukkan Pendidikan" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan" required>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat_ibu" placeholder="Masukkan Alamat" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Status Perkawinan</label>
                                        <input class="form-control" type="text" name="status_ibu" placeholder="Masukkan Status Perkawinan" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penghasilan</label>
                                        <input class="form-control" type="number" name="penghasilan_ibu" placeholder="Masukkan Penghasilan" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">No. Telp</label>
                                        <input class="form-control" type="text" name="no_telp_ibu" placeholder="Masukkan No. Telp" required>
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Keberadaan Ibu</label>
                                        <select class="form-select" name="keberadaan_ibu" required>
                                            <option selected disabled>Pilih Keberadaan Ibu</option>
                                            <option value="1">Masih Hidup</option>
                                            <option value="2">Meninggal</option>
                                            <option value="3">Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus_ibu" placeholder="Masukkan Catatan Khusus/Tambahan" required>
                                    </div>
                                </div>

                                <!-- WALI -->
                                <h6 class="mt-4">Identitas Wali (Opsional)</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Wali</label>
                                        <input class="form-control" type="text" name="nama_wali" placeholder="Masukkan Nama Wali">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir_wali" placeholder="Masukkan Tempat Lahir">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir_wali" placeholder="Masukkan Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama_wali" placeholder="Masukkan Agama">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku_wali" placeholder="Masukkan Suku">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan_wali" placeholder="Masukkan Pendidikan">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan_wali" placeholder="Masukkan Pekerjaan">
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat_wali" placeholder="Masukkan Alamat">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Status Perkawinan</label>
                                        <input class="form-control" type="text" name="status_wali" placeholder="Masukkan Status Perkawinan">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penghasilan</label>
                                        <input class="form-control" type="number" name="penghasilan_wali" placeholder="Masukkan Penghasilan">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">No. Telp</label>
                                        <input class="form-control" type="text" name="no_telp_wali" placeholder="Masukkan No. Telp">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Keberadaan Wali</label>
                                        <select class="form-select" name="keberadaan_wali">
                                            <option selected disabled>Pilih Keberadaan Wali</option>
                                            <option value="1">Masih Hidup</option>
                                            <option value="2">Meninggal</option>
                                            <option value="3">Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus_wali" placeholder="Masukkan Catatan Khusus/Tambahan">
                                    </div>
                                </div>

                                <button class="btn btn-primary mt-5" type="submit">Tambah Siswa Baru</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Zero Configuration  Ends-->
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@push('javascript')
    <script src="{{ asset('assets/js/pages/registration/registration.js') }}"></script>
@endpush
