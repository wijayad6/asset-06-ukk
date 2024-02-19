<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::orderBy('created_at', 'DESC')->get();

        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Buku::create($request->all());

        return redirect()->route('buku')->with('success', 'Buku berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $buku_id)
    {
        $buku = Buku::findOrFail($buku_id);

        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $buku_id)
    {
        $buku = Buku::findOrFail($buku_id);

        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $buku_id)
    {
        $buku = Buku::findOrFail($buku_id);

        $buku->update($request->all());

        return redirect()->route('buku')->with('success', 'Buku berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $buku_id)
    {
        $buku = Buku::findOrFail($buku_id);

        $buku->delete();

        return redirect()->route('buku')->with('success', 'Buku berhasil dihapus');
    }
}
