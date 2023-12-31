@extends('layouts.app')

@section('title')
    Edit Detail Calon Penerima Manfaat
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Detail Calon Penerima Manfaat</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Pendaftaran</li>
                    <li class="breadcrumb-item active">Edit Detail Calon Penerima Manfaat</li>
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
                            <h5>Edit Detail Calon Penerima Manfaat</h5>
                            <span>Edit detail calon penerima manfaat yang telah mendaftakna diri</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pendaftaran.update', \Crypt::encrypt($siswa->id)) }}" method="POST">
                                @csrf
                                @method('PUT')


                                <!-- ANAK -->
                                <h6>Identitas Anak</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Anak</label>
                                        <input class="form-control" type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama" value="{{ $siswa->agama }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku" value="{{ $siswa->suku }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan" value="{{ $siswa->pendidikan }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan" value="{{ $siswa->pekerjaan }}">
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ $siswa->alamat }}">
                                    </div>
                                </div>

                                <h6 class="mt-4">Kondisi Anak</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Kondisi Fisik/Psikis</label>
                                        <select class="form-select" name="kondisi_siswa">
                                            <option selected disabled>Pilih Kondisi Fisik/Psikis</option>
                                            <option value="1" {{ $siswa->kondisi_siswa == 1 ? 'selected' : '' }}>Normal</option>
                                            <option value="2" {{ $siswa->kondisi_siswa == 2 ? 'selected' : '' }}>Cacat/Terganggu</option>
                                            <option value="3" {{ $siswa->kondisi_siswa == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tinggi Badan</label>
                                        <input class="form-control" type="number" name="tinggi_badan" value="{{ $siswa->tinggi_badan }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Berat Badan</label>
                                        <input class="form-control" type="number" name="berat_badan" value="{{ $siswa->berat_badan }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Hobby</label>
                                        <input class="form-control" type="text" name="hobby" value="{{ $siswa->hobby }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Cita - Cita</label>
                                        <input class="form-control" type="text" name="cita_cita" value="{{ $siswa->cita_cita }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Prestasi Yang Diraih</label>
                                        <input class="form-control" type="text" name="prestasi_yang_diraih" value="{{ $siswa->prestasi_yang_diraih }}">
                                    </div>
                                </div>

                                <h6 class="mt-4">Permasalahan Anak</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Kategori Permasalahan</label>
                                        <select class="form-select" name="masalah_anak">
                                            <option selected disabled>Pilih Permasalahan</option>
                                            <option value="1" {{ $siswa->masalah_anak == 1 ? 'selected' : '' }}>Anak Kurang Mampu</option>
                                            <option value="2" {{ $siswa->masalah_anak == 2 ? 'selected' : '' }}>Anak Yatim</option>
                                            <option value="3" {{ $siswa->masalah_anak == 3 ? 'selected' : '' }}>Anak Piatu</option>
                                            <option value="4" {{ $siswa->masalah_anak == 4 ? 'selected' : '' }}>Anak Yatim Piatu</option>
                                            <option value="5" {{ $siswa->masalah_anak == 5 ? 'selected' : '' }}>Anak Terlantar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penyakit Yang Pernah Diderita</label>
                                        <input class="form-control" type="text" name="penyakit_yang_pernah_diderita" value="{{ $siswa->penyakit_yang_pernah_diderita }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus" value="{{ $siswa->catatan_khusus }}">
                                    </div>
                                </div>

                                <!-- AYAH -->
                                <h6 class="mt-4">Identitas Ayah</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Ayah</label>
                                        <input class="form-control" type="text" name="nama_ayah" value="{{ $siswa->nama_ayah }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir_ayah" value="{{ $siswa->tempat_lahir_ayah }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir_ayah" value="{{ $siswa->tanggal_lahir_ayah }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama_ayah" value="{{ $siswa->agama_ayah }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku_ayah" value="{{ $siswa->suku_ayah }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan_ayah" value="{{ $siswa->pendidikan_ayah }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}">
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat_ayah" value="{{ $siswa->alamat_ayah }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Status Perkawinan</label>
                                        <input class="form-control" type="text" name="status_ayah" value="{{ $siswa->status_ayah }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penghasilan</label>
                                        <input class="form-control" type="number" name="penghasilan_ayah" value="{{ $siswa->penghasilan_ayah }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">No. Telp</label>
                                        <input class="form-control" type="text" name="no_telp_ayah" value="{{ $siswa->no_telp_ayah }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Keberadaan Ayah</label>
                                        <select class="form-select" name="keberadaan_ayah">
                                            <option selected disabled>Pilih Keberadaan Ayah</option>
                                            <option value="1" {{ $siswa->keberadaan_ayah == 1 ? 'selected' : '' }}>Masih Hidup</option>
                                            <option value="2" {{ $siswa->keberadaan_ayah == 2 ? 'selected' : '' }}>Meninggal</option>
                                            <option value="3" {{ $siswa->keberadaan_ayah == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus_ayah" value="{{ $siswa->catatan_khusus_ayah }}">
                                    </div>
                                </div>

                                <!-- IBU -->
                                <h6 class="mt-4">Identitas Ibu</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Ibu</label>
                                        <input class="form-control" type="text" name="nama_ibu" value="{{ $siswa->nama_ibu }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir_ibu" value="{{ $siswa->tempat_lahir_ibu }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir_ibu" value="{{ $siswa->tanggal_lahir_ibu }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama_ibu" value="{{ $siswa->agama_ibu }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku_ibu" value="{{ $siswa->suku_ibu }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan_ibu" value="{{ $siswa->pendidikan_ibu }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan_ibu" value="{{ $siswa->pekerjaan_ibu }}">
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat_ibu" value="{{ $siswa->alamat_ibu }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Status Perkawinan</label>
                                        <input class="form-control" type="text" name="status_ibu" value="{{ $siswa->status_ibu }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penghasilan</label>
                                        <input class="form-control" type="number" name="penghasilan_ibu" value="{{ $siswa->penghasilan_ibu }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">No. Telp</label>
                                        <input class="form-control" type="text" name="no_telp_ibu" value="{{ $siswa->no_telp_ibu }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Keberadaan Ibu</label>
                                        <select class="form-select" name="keberadaan_ibu">
                                            <option selected disabled>Pilih Keberadaan Ibu</option>
                                            <option value="1" {{ $siswa->keberadaan_ibu == 1 ? 'selected' : '' }}>Masih Hidup</option>
                                            <option value="2" {{ $siswa->keberadaan_ibu == 2 ? 'selected' : '' }}>Meninggal</option>
                                            <option value="3" {{ $siswa->keberadaan_ibu == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus_ibu" value="{{ $siswa->catatan_khusus_ibu }}">
                                    </div>
                                </div>

                                <!-- WALI -->
                                <h6 class="mt-4">Identitas Wali (Opsional)</h6>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Nama Wali</label>
                                        <input class="form-control" type="text" name="nama_wali" value="{{ $siswa->nama_wali }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" name="tempat_lahir_wali" value="{{ $siswa->tempat_lahir_wali }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" name="tanggal_lahir_wali" value="{{ $siswa->tanggal_lahir_ibu }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Agama</label>
                                        <input class="form-control" type="text" name="agama_wali" value="{{ $siswa->agama_wali }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Suku</label>
                                        <input class="form-control" type="text" name="suku_wali" value="{{ $siswa->suku_wali }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Pendidikan</label>
                                        <input class="form-control" type="text" name="pendidikan_wali" value="{{ $siswa->pendidikan_wali }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan_wali" value="{{ $siswa->pekerjaan_wali }}">
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat_wali" value="{{ $siswa->alamat_wali }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Status Perkawinan</label>
                                        <input class="form-control" type="text" name="status_wali" value="{{ $siswa->status_wali }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Penghasilan</label>
                                        <input class="form-control" type="number" name="penghasilan_wali" value="{{ $siswa->penghasilan_wali }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">No. Telp</label>
                                        <input class="form-control" type="text" name="no_telp_wali" value="{{ $siswa->no_telp_wali }}">
                                    </div>
                                </div>
                                <div class="row g-3 mt-2">
                                    <div class="col-md-4">
                                        <label class="form-label">Keberadaan Wali</label>
                                        <select class="form-select" name="keberadaan_wali">
                                            <option selected disabled>Pilih Keberadaan Wali</option>
                                            <option value="1" {{ $siswa->keberadaan_wali == 1 ? 'selected' : '' }}>Masih Hidup</option>
                                            <option value="2" {{ $siswa->keberadaan_wali == 2 ? 'selected' : '' }}>Meninggal</option>
                                            <option value="3" {{ $siswa->keberadaan_wali == 3 ? 'selected' : '' }}>Tidak Diketahui</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="form-label">Catatan Khusus/Tambahan</label>
                                        <input class="form-control" type="text" name="catatan_khusus_wali" value="{{ $siswa->catatan_khusus_wali }}">
                                    </div>
                                </div>

                                <button class="btn btn-primary mt-5" type="submit">Ubah Data Siswa</button>
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
