<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pinjam;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjam = Pinjam::orderBy('created_at', 'DESC')->get();

        return view('pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pinjam::create($request->all());

        return redirect()->route('pinjam')->with('success', 'Buku berhasil ditambah ke daftar pinjaman');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $peminjaman_id)
    {
        $pinjam = Pinjam::findOrFail($peminjaman_id);

        return view('pinjam.show', compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $peminjaman_id)
    {
        $pinjam = Pinjam::findOrFail($peminjaman_id);

        return view('pinjam.edit', compact('pinjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $peminjaman_id)
    {
        $pinjam = Pinjam::findOrFail($peminjaman_id);

        $pinjam->update($request->all());

        return redirect()->route('pinjam')->with('success', 'Data pinjaman berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $peminjaman_id)
    {
        $pinjam = Pinjam::findOrFail($peminjaman_id);

        $pinjam->delete();

        return redirect()->route('pinjam')->with('success', 'Buku berhasil dihapus dari daftar pinjaman');
    }
}
