@extends('layouts.app')

@section('title')
    Pengguna Baru
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Pengguna Baru</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Pendaftaran</li>
                    <li class="breadcrumb-item active">Pengguna Baru</li>
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
                            <h5>Pengguna Baru</h5>
                            <span>Lengkapi form dibawah ini untuk mengisi semua data yang diperlukan pengguna pendaftaran</span>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pengguna.store') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="row g-3 mt-2">
                                    <div class="col-md-6">
                                        <label class="form-label">Nama Pengguna</label>
                                        <input class="form-control" type="text" name="name" placeholder="Masukkan Nama" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="text" name="email" placeholder="Masukkan Email" required>
                                    </div>
                                </div>

                                <button class="btn btn-primary mt-5" type="submit">Tambah Pengguna</button>
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
