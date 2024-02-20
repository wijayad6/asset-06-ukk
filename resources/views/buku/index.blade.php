@extends('layouts_buku.app')

@section('title', 'Daftar Buku')

@section('contents')
    <div class="d-flex align-item-center justify-content-between">
        <a href="{{route('buku.create')}}" class="btn btn-primary">Tambah Buku</a>
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
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($buku->count()>0)
                @foreach ($buku as $rs)
                    <tr>
                        <td class="align-middle">{{$loop->iteration}}</td>
                        <td class="align-middle">{{$rs->judul}}</td>
                        <td class="align-middle">{{$rs->penulis}}</td>
                        <td class="align-middle">{{$rs->penerbit}}</td>
                        <td class="align-middle">{{$rs->tahun_terbit}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('buku.show', $rs->buku_id)}}" type="button"
                                    class="btn btn-secondary">Detail</a>

                                <a href="{{route('buku.edit', $rs->buku_id)}}" type="button"
                                    class="btn btn-warning">Edit</a>

                                <form action="{{route('buku.destroy', $rs->buku_id)}}" method="GET" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
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
