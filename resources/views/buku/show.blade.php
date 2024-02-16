@extends('layouts_buku.app')

@section('title', 'Detail Buku')

@section('contents')
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" placeholder="Judul" value="" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="Penulis" value="" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value=""
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="" readonly>
        </div>
    </div>
@endsection