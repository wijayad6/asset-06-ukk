@extends('layouts_pinjam.app')

@section('title', 'Detail Buku')

@section('contents')
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" placeholder="Judul" value="" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" placeholder="Tanggal Pinjam" value=""
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" placeholder="Tanggal kembali" value=""
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="" readonly>
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
