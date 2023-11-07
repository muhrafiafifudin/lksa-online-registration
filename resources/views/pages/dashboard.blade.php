@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts -->
        <div class="container-fluid dashboard-default-sec">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Selamat Datang</h5>
                                    <span>Selamat datang di website pendaftaran online</span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-end">
                                        <a href="{{ route('download', ['file' => 'Formulir LKSA.doc']) }}" class="btn btn-primary">Download Formulir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Zero Configuration  Ends-->
            </div>
        </div>
        <!-- Container-fluid Ends -->
    </div>
@endsection
