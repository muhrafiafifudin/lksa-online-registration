@extends('layouts.app')

@section('title')
    Daftar Calon Penerima Manfaat
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Daftar Calon Penerima Manfaat</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Daftar Calon Penerima Manfaat</li>
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
                                    <h5>Daftar Calon Penerima Manfaat</h5>
                                    <span>Detail data diri dari semua siswa yang mendaftar</span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-end">
                                        <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">Tambah Calon Penerima Manfaat</a>
                                        <a href="{{ route('download', ['file' => 'Formulir LKSA.doc']) }}" class="btn btn-primary">Download Formulir</a>
                                    </div>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($siswa as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_siswa }}</td>
                                            <td>
                                                <form action="{{ route('pendaftaran.destroy', \Crypt::encrypt($data->id)) }}" method="POST" id="delete-form">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>

                                                <a href="{{ route('pendaftaran.edit', \Crypt::encrypt($data->id)) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('pendaftaran.show', \Crypt::encrypt($data->id)) }}" class="btn btn-primary">View</a>

                                                <a class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Hapus</a>
                                            </td>
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
