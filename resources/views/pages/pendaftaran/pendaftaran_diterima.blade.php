@extends('layouts.app')

@section('title')
    Daftar Calon Penerima Manfaat Yang Diterima
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Daftar Calon Penerima Manfaat Yang Diterima</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Daftar Calon Penerima Manfaat Yang Diterima</li>
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
                                    <h5>Daftar Calon Penerima Manfaat Yang Diterima</h5>
                                    <span>Detail data diri dari semua siswa yang mendaftar dan diterima</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="display" id="registration-table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Calon Penerima Manfaat</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir Lahir</th>
\                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($siswa as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_siswa }}</td>
                                            <td>{{ $data->tempat_lahir }}</td>
                                            <td>{{ $data->tanggal_lahir }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
