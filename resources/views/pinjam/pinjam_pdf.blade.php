@extends('layouts_cetak.app')

@section('title', 'Daftar Pinjaman')

@section('contents')
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if ($pinjam->count() > 0)
                @foreach ($pinjam as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->buku->judul }}</td>
                        <td class="align-middle">{{ $rs->tanggal_pinjam }}</td>
                        <td class="align-middle">{{ $rs->tanggal_kembali }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
    <script>
        window.print()
    </script>
@endsection
