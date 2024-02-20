@extends('layouts_pinjam.app')

@section('title', 'Detail Buku')

@section('contents')
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $pinjam->buku->judul }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" placeholder="Tanggal Pinjam"
                value="{{ $pinjam->tanggal_pinjam }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" placeholder="Tanggal kembali"
                value="{{ $pinjam->tanggal_kembali }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $pinjam->status }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $pinjam->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $pinjam->updated_at }}" readonly>
        </div>
    </div>
@endsection
