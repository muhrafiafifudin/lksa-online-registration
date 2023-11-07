@extends('layouts.app')

@section('title')
    Import Data Daftar Calon Penerima Manfaat
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Import Data Daftar Calon Penerima Manfaat</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Import Data Daftar Calon Penerima Manfaat</li>
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
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Import Data Daftar Calon Penerima Manfaat</h5>
                                    <span>Import detail data diri dari semua siswa yang mendaftar</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('post-import-data') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="row mt-2 mb-5">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <label class="form-label">Upload Data</label>
                                        <input class="form-control" type="file" name="file" required>
                                    </div>
                                    <div class="col-md-3">
                                        <br><button class="btn btn-primary" type="submit">Upload</button>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
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
    <script src="{{ asset('assets/js/pages/registration/import_data.js') }}"></script>
@endpush
