@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>


                <div class="card-body">
                    <div>
                        Selamat Datang Di System Saya.<br><br>
                        Kenalan Yuk !!<br>
                        Namaku Cito Julio<br>
                        Sebagai Mahasiwa Sistem Informasi di Telkom Univeristy Surabaya<br>
                        <br><br>
                        Salam Kenal Semua!!<br><br>

                        <div class="col-md-6 mt-5">
                            <!-- Tombol dengan class btn dan btn-primary dari Bootstrap -->
                            <a href="/list_barang" class="btn btn-primary">Ke List Barang</a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <!-- Tombol dengan class btn dan btn-primary dari Bootstrap -->
                            <a href="/input_barang" class="btn btn-primary">Input Barang</a>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
