@extends('layouts.master')

@section('addCss')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    .card {
        margin: 100px;
    }
    .card-header {
    background-color: #88c2ff !important;
    }
</style>
@endsection
@section('addJavascript')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                <div class="card-header">{{ __('Verifikasi Emailmu Terlebih Dahulu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    {{ __('<--Sebelum Proses, Silahkan hubungi admin untuk proses verifikasi.') }}
                    {{ __('Hubungi Admin Lewat Samping.') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik di sini untuk meminta verifikasi lagi') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
