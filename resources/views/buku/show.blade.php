@extends('layouts_buku.app')

@section('title', 'Detail Buku')

@section('contents')
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{$buku->judul}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="{{$buku->penulis}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="{{$buku->penerbit}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="{{$buku->tahun_terbit}}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Dibuat pada :</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{$buku->created_at}}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diperbarui pada :</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{$buku->updated_at}}" readonly>
        </div>
    </div>
@endsection
