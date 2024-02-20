@extends('layouts_buku.app')

@section('title', 'Edit Buku')

@section('contents')
    <hr />
    <form action="{{route('buku.update', $buku->buku_id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid mb-3">
            <div class="col mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Buku" value="{{$buku->judul}}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="{{$buku->penulis}}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="{{$buku->penerbit}}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="{{$buku->tahun_terbit}}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Simpan</button>
            </div>
        </div>
    </form>
@endsection
