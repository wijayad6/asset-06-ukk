@extends('layouts_buku.app')

@section('title', 'Tambah Buku')

@section('contents')
    <hr />
    <form action="{{route('buku.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid mb-3">
            <div class="mb-3">
                <input type="text" name="judul" class="form-control" placeholder="Judul Buku">
            </div>
            <div class="mb-3">
                <input type="text" name="penulis" class="form-control" placeholder="Penulis">
            </div>
            <div class="mb-3">
                <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection
