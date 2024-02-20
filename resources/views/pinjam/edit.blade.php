@extends('layouts_buku.app')

@section('title', 'Edit Data')

@section('contents')
    <hr />
    <form action="{{ route('pinjam.update', $pinjam->peminjaman_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid mb-3">
            <div class="col mb-3">
                <label class="form-label">Judul Buku</label>
                <select class="form-control" name="buku_id" id="buku_id">
                    @foreach ($buku as $item)
                        <option value="{{ $item->buku_id }}"
                            {{ $pinjam->buku->buku_id === $item->buku_id ? 'selected' : '' }}>{{ $item->judul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" placeholder="Tanggal Pinjam"
                    value="{{ $pinjam->tanggal_pinjam }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Tanggal kembali</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" placeholder="Tanggal kembali"
                    value="{{ $pinjam->tanggal_kembali }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Status"
                    value="{{ $pinjam->status }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
