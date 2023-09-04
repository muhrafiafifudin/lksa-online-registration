@extends('layouts.app')

@section('title')
    Detail Siswa
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Detail Siswa</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Pendaftaran</li>
                    <li class="breadcrumb-item active">Detail Siswa</li>
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
                            <h5>Detail Siswa</h5>
                            <span>Detail siswa yang telah mendaftakna diri</span>
                        </div>
                        <div class="card-body">
                            <!-- ANAK -->
                            <h6>Identitas Anak</h6>

                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Nama Anak</label>
                                    <input class="form-control" type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Agama</label>
                                    <input class="form-control" type="text" name="agama" value="{{ $siswa->agama }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Suku</label>
                                    <input class="form-control" type="text" name="suku" value="{{ $siswa->suku }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Pendidikan</label>
                                    <input class="form-control" type="text" name="pendidikan" value="{{ $siswa->pendidikan }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Pekerjaan</label>
                                    <input class="form-control" type="text" name="pekerjaan" value="{{ $siswa->pekerjaan }}" disabled>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" value="{{ $siswa->alamat }}" disabled>
                                </div>
                            </div>

                            <h6 class="mt-4">Kondisi Anak</h6>

                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Kondisi Fisik/Psikis</label>
                                    <select class="form-select" name="kondisi_siswa" disabled>
                                        <option selected disabled>Pilih Kondisi Fisik/Psikis</option>
                                        <option value="1" {{ $siswa->kondisi_siswa == 1 ? 'selected' : '' }}>Normal</option>
                                        <option value="2" {{ $siswa->kondisi_siswa == 2 ? 'selected' : '' }}>Cacat/Terganggu</option>
                                        <option value="3" {{ $siswa->kondisi_siswa == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tinggi Badan</label>
                                    <input class="form-control" type="number" name="tinggi_badan" value="{{ $siswa->tinggi_badan }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Berat Badan</label>
                                    <input class="form-control" type="number" name="berat_badan" value="{{ $siswa->berat_badan }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Hobby</label>
                                    <input class="form-control" type="text" name="hobby" value="{{ $siswa->hobby }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Cita - Cita</label>
                                    <input class="form-control" type="text" name="cita_cita" value="{{ $siswa->cita_cita }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Prestasi Yang Diraih</label>
                                    <input class="form-control" type="text" name="prestasi_yang_diraih" value="{{ $siswa->prestasi_yang_diraih }}" disabled>
                                </div>
                            </div>

                            <h6 class="mt-4">Permasalahan Anak</h6>

                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Kategori Permasalahan</label>
                                    <select class="form-select" name="masalah_anak" disabled>
                                        <option selected disabled>Pilih Permasalahan</option>
                                        <option value="1" {{ $siswa->masalah_anak == 1 ? 'selected' : '' }}>Anak Terlantar/Anak Jalanan</option>
                                        <option value="2" {{ $siswa->masalah_anak == 2 ? 'selected' : '' }}>Anak Balita Terlantar</option>
                                        <option value="3" {{ $siswa->masalah_anak == 3 ? 'selected' : '' }}>ABH</option>
                                        <option value="4" {{ $siswa->masalah_anak == 4 ? 'selected' : '' }}>AMPK</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Penyakit Yang Pernah Diderita</label>
                                    <input class="form-control" type="text" name="penyakit_yang_pernah_diderita" value="{{ $siswa->penyakit_yang_pernah_diderita }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Catatan Khusus/Tambahan</label>
                                    <input class="form-control" type="text" name="catatan_khusus" value="{{ $siswa->catatan_khusus }}" disabled>
                                </div>
                            </div>

                            <!-- AYAH -->
                            <h6 class="mt-4">Identitas Ayah</h6>

                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Nama Ayah</label>
                                    <input class="form-control" type="text" name="nama_ayah" value="{{ $siswa->nama_ayah }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir_ayah" value="{{ $siswa->tempat_lahir_ayah }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir_ayah" value="{{ $siswa->tanggal_lahir_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Agama</label>
                                    <input class="form-control" type="text" name="agama_ayah" value="{{ $siswa->agama_ayah }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Suku</label>
                                    <input class="form-control" type="text" name="suku_ayah" value="{{ $siswa->suku_ayah }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Pendidikan</label>
                                    <input class="form-control" type="text" name="pendidikan_ayah" value="{{ $siswa->pendidikan_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Pekerjaan</label>
                                    <input class="form-control" type="text" name="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}" disabled>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat_ayah" value="{{ $siswa->alamat_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Status Perkawinan</label>
                                    <input class="form-control" type="text" name="status_ayah" value="{{ $siswa->status_ayah }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Penghasilan</label>
                                    <input class="form-control" type="number" name="penghasilan_ayah" value="{{ $siswa->penghasilan_ayah }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">No. Telp</label>
                                    <input class="form-control" type="text" name="no_telp_ayah" value="{{ $siswa->no_telp_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Keberadaan Ayah</label>
                                    <select class="form-select" name="keberadaan_ayah" disabled>
                                        <option selected disabled>Pilih Keberadaan Ayah</option>
                                        <option value="1" {{ $siswa->keberadaan_ayah == 1 ? 'selected' : '' }}>Masih Hidup</option>
                                        <option value="2" {{ $siswa->keberadaan_ayah == 2 ? 'selected' : '' }}>Meninggal</option>
                                        <option value="3" {{ $siswa->keberadaan_ayah == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Catatan Khusus/Tambahan</label>
                                    <input class="form-control" type="text" name="catatan_khusus_ayah" value="{{ $siswa->catatan_khusus_ayah }}" disabled>
                                </div>
                            </div>

                            <!-- IBU -->
                            <h6 class="mt-4">Identitas Ibu</h6>

                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Nama Ibu</label>
                                    <input class="form-control" type="text" name="nama_ibu" value="{{ $siswa->nama_ibu }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir_ibu" value="{{ $siswa->tempat_lahir_ibu }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir_ibu" value="{{ $siswa->tanggal_lahir_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Agama</label>
                                    <input class="form-control" type="text" name="agama_ibu" value="{{ $siswa->agama_ibu }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Suku</label>
                                    <input class="form-control" type="text" name="suku_ibu" value="{{ $siswa->suku_ibu }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Pendidikan</label>
                                    <input class="form-control" type="text" name="pendidikan_ibu" value="{{ $siswa->pendidikan_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Pekerjaan</label>
                                    <input class="form-control" type="text" name="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}" disabled>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat_ibu" value="{{ $siswa->alamat_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Status Perkawinan</label>
                                    <input class="form-control" type="text" name="status_ibu" value="{{ $siswa->status_ibu }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Penghasilan</label>
                                    <input class="form-control" type="number" name="penghasilan_ibu" value="{{ $siswa->penghasilan_ibu }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">No. Telp</label>
                                    <input class="form-control" type="text" name="no_telp_ibu" value="{{ $siswa->no_telp_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Keberadaan Ibu</label>
                                    <select class="form-select" name="keberadaan_ibu" disabled>
                                        <option selected disabled>Pilih Keberadaan Ibu</option>
                                        <option value="1" {{ $siswa->keberadaan_ibu == 1 ? 'selected' : '' }}>Masih Hidup</option>
                                        <option value="2" {{ $siswa->keberadaan_ibu == 2 ? 'selected' : '' }}>Meninggal</option>
                                        <option value="3" {{ $siswa->keberadaan_ibu == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Catatan Khusus/Tambahan</label>
                                    <input class="form-control" type="text" name="catatan_khusus_ibu" value="{{ $siswa->catatan_khusus_ibu }}" disabled>
                                </div>
                            </div>

                            <!-- WALI -->
                            <h6 class="mt-4">Identitas Wali (Opsional)</h6>

                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Nama Wali</label>
                                    <input class="form-control" type="text" name="nama_wali" value="{{ $siswa->nama_wali }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir_wali" value="{{ $siswa->tempat_lahir_wali }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir_wali" value="{{ $siswa->tanggal_lahir_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Agama</label>
                                    <input class="form-control" type="text" name="agama_wali" value="{{ $siswa->agama_wali }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Suku</label>
                                    <input class="form-control" type="text" name="suku_wali" value="{{ $siswa->suku_wali }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Pendidikan</label>
                                    <input class="form-control" type="text" name="pendidikan_wali" value="{{ $siswa->pendidikan_wali }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Pekerjaan</label>
                                    <input class="form-control" type="text" name="pekerjaan_wali" value="{{ $siswa->pekerjaan_wali }}" disabled>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat_wali" value="{{ $siswa->alamat_wali }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Status Perkawinan</label>
                                    <input class="form-control" type="text" name="status_wali" value="{{ $siswa->status_wali }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Penghasilan</label>
                                    <input class="form-control" type="number" name="penghasilan_wali" value="{{ $siswa->penghasilan_wali }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">No. Telp</label>
                                    <input class="form-control" type="text" name="no_telp_wali" value="{{ $siswa->no_telp_wali }}" disabled>
                                </div>
                            </div>
                            <div class="row g-3 mt-2">
                                <div class="col-md-4">
                                    <label class="form-label">Keberadaan Wali</label>
                                    <select class="form-select" name="keberadaan_wali" disabled>
                                        <option selected disabled>Pilih Keberadaan Wali</option>
                                        <option value="1" {{ $siswa->keberadaan_wali == 1 ? 'selected' : '' }}>Masih Hidup</option>
                                        <option value="2" {{ $siswa->keberadaan_wali == 2 ? 'selected' : '' }}>Meninggal</option>
                                        <option value="3" {{ $siswa->keberadaan_wali == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label">Catatan Khusus/Tambahan</label>
                                    <input class="form-control" type="text" name="catatan_khusus_wali" value="{{ $siswa->catatan_khusus_wali }}" disabled>
                                </div>
                            </div>
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
