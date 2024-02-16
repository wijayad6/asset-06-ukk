@extends('layouts_buku.app')

@section('title', 'Edit Buku')

@section('contents')
    <hr />
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid mb-3">
            <div class="col mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Buku" value="">
            </div>
            <div class="col mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="">
            </div>
            <div class="col mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="">
            </div>
            <div class="col mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
