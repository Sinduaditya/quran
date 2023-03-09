@extends('main')
@section('title', 'Home | Quran App')
@section('content')
    <div class="jumbotron">
        <h2 class="fw-bold mb-2 mt-5">
            Assalamualaikum<br>
            Selamat Datang Di Aplikasi Quran</h2>
    </div>
    <br><br>
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-12 mb-4">

            </div>
            @foreach ($response as $niat)
                <div class="col-md-4 mb-4">
                    <a href="surah/{{ $niat->nomor }}" class="text-dark text-decoration-none">
                        <div class="card h-100 border-0 rounded-3 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">{{ $niat->nomor }}</div>
                                    <div class="flex-grow-1 ms-3">
                                        <strong>{{ $niat->nama_latin }}&nbsp;({{ $niat->jumlah_ayat }})</strong>
                                        <br>
                                        <small>
                                            <i>{{ $niat->arti }}</i>
                                        </small>
                                    </div>
                                    <div class="flex-grow-5 ms-5">
                                        <h3>{{ $niat->nama }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
