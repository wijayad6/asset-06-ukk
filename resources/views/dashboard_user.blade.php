@extends('layouts_user.app')

@section('title', 'Halo Para Pembaca')

@section('contents')
    <div class="container-fluid">
        <div class="row">
            @if ($buku->count() > 0)
                @foreach ($buku as $rs)
                    <div class="card card-hover m-3" style="width: 18rem;">
                        <img src="{{ asset('admin_assets/img/undraw_posting_photo.svg') }}" class="mx-3 my-3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $rs->judul }}</h5>
                            {{-- <p class="card-text">Penulis : {{ $rs->penulis }}</p>
                            <p class="card-text">Penerbit : {{ $rs->penerbit }}</p> --}}
                            <p class="card-text">{{ $rs->tahun_terbit }}</p>
                            <a href="{{route('buku.show', $rs->buku_id)}}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                @endforeach
            @else
            @endif
        </div>
    </div>
@endsection
