@extends('layouts.app')

@section('title')
    Pengguna
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <h3>Pengguna</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Pengguna</li>
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
                                    <h5>Pengguna</h5>
                                    <span>Detail semua pengguna yang terdaftar</span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-end">
                                        <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah Pengguna</a>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1 @endphp
                                    @foreach ($pengguna as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>
                                                <form action="{{ route('pengguna.destroy', \Crypt::encrypt($data->id)) }}" method="POST" id="delete-form">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>

                                                <a href="{{ route('pengguna.edit', \Crypt::encrypt($data->id)) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('pengguna.show', \Crypt::encrypt($data->id)) }}" class="btn btn-primary">View</a>

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
