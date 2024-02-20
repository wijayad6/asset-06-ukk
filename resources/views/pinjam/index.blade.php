@extends('layouts_pinjam.app')

@section('title', 'Daftar Pinjaman')

@section('contents')
    <div class="d-flex align-item-center justify-content-between mb-3">
        <a href="{{ route('pinjam.create') }}" class="btn btn-primary">Tambah Pinjaman</a>
        <a href="{{ route('pinjam.cetak_pdf') }}" class="btn btn-primary">Cetak Struk</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($pinjam->count()>0)
                @foreach ($pinjam as $rs)
                    <tr>
                        <td class="align-middle">{{$loop->iteration}}</td>
                        <td class="align-middle">{{$rs->buku->judul}}</td>
                        <td class="align-middle">{{$rs->tanggal_pinjam}}</td>
                        <td class="align-middle">{{$rs->tanggal_kembali}}</td>
                        <td class="align-middle">{{$rs->status}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('pinjam.show', $rs->peminjaman_id)}}" type="button"
                                    class="btn btn-secondary">Detail</a>

                                <a href="{{route('pinjam.edit', $rs->peminjaman_id)}}" type="button"
                                    class="btn btn-warning">Edit</a>

                                <form action="{{route('pinjam.destroy', $rs->peminjaman_id)}}" method="GET"
                                    type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
