@extends('main')
@section('title', 'Home | Quran App')
@section('content')
    <br><br>
    <div class="container mb-5 " style="margin-top: 80px;">
        <div class="row justify-content-between">
            <div class="col-md-4 col-12 text-left mb-3">
                @if ($response->surat_sebelumnya === false)
                    {{--  --}}
                @else
                    <div class="d-grid gap-2">
                        <a href="{{ route('quran.detail', $response->surat_sebelumnya->nomor) }}"
                            class="btn btn-success btn-md border-0 text-white shadow rounded-3">
                            👈&nbsp;Sebelumnya
                            <strong>{{ $response->surat_sebelumnya->nama_latin }}</strong>
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-md-4 col-12 text-right mb-3">
                @if ($response->surat_selanjutnya === false)
                    {{--  --}}
                @else
                    <div class="d-grid gap-2">
                        <a href="{{ route('quran.detail', $response->surat_selanjutnya->nomor) }}"
                            class="btn btn-success btn-md border-0 text-white shadow rounded-3">
                            Selanjutnya
                            <strong>{{ $response->surat_selanjutnya->nama_latin }}</strong>&nbsp;👉
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="card border-0 rounded-3 shadow mt-1">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-md-10 col-12">
                                <h3>{{ $response->nama_latin }} |
                                    <strong>{{ $response->nama }} </strong>
                                </h3>
                                <small class="me-4">
                                    Jumlah Ayat : <strong>{{ $response->jumlah_ayat }}</strong>
                                </small>
                                <small>
                                    Tempat Turun : <strong>{{ $response->tempat_turun }}</strong>
                                </small>
                            </div>
                            <div class="col-md-2 col-12 text-end">
                                <div class="d-grid gap-2">
                                    <audio id="myAudio" src="{{ $response->audio }}" preload="auto"></audio>
                                    <button id="audioButton" class="play btn btn-md border-0 shadow mt-3 rounded-3"
                                        onclick="playOrStopAudio()">
                                        Play Audio
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">{!! $response->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            @foreach ($response->ayat as $ayat)
                <div class="col-md-12 mt-3">
                    <div class="card border-0 rounded-3 shadow mt-3">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-md-6 col-12">
                                    {{ $ayat->surah }}:{{ $ayat->nomor }}
                                    <p class="mt-2">
                                        <i>{{ $ayat->idn }}</i>
                                    </p>
                                </div>
                                <div class="col-md-6 col-12 text-end">
                                    <h3>{{ $ayat->ar }}</h3>
                                    <small>{!! $ayat->tr !!}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- @dd($response) --}}
@endsection
