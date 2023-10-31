@extends('layouts.app')

@section('title')
    Laporan Semua Data
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Laporan PDF</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Laporan Semua Data</li>
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
                                    <h5>Laporan Semua Data</h5>
                                    <span>Laporan Semua Data Yang Mendaftar</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('laporan.print-semua-data') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="row mt-2 mb-5">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-3">
                                        <label class="form-label">Dari Tanggal</label>
                                        <input class="form-control" type="date" name="fromDate" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label">Sampai Tanggal</label>
                                        <input class="form-control" type="date" name="toDate" required>
                                    </div>
                                    <div class="col-md-2">
                                        <br><button class="btn btn-primary" type="submit">Cetak</button>
                                    </div>
                                    <div class="col-md-2"></div>
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
    <script src="{{ asset('assets/js/pages/laporan/laporan-semua-data.js') }}"></script>
@endpush
