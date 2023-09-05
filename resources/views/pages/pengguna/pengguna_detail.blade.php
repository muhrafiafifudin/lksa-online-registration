@extends('layouts.app')

@section('title')
    Detail Pengguna
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Detail Pengguna</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Pendaftaran</li>
                    <li class="breadcrumb-item active">Detail Pengguna</li>
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
                            <h5>Detail Pengguna</h5>
                            <span>Detail pengguna yang telah mendaftakna diri</span>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input class="form-control" type="text" name="name" value="{{ $pengguna->name }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="text" name="email" value="{{ $pengguna->email }}" disabled>
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
