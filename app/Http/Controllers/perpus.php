<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datbuku;
use App\Models\penulis;
use App\Models\penerbit;

class perpus extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $dapus = datbuku::with('author','penerbit')->paginate(2);
                return view('/menubuku/readbuku', compact('dapus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/menubuku/buatbuku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        datbuku::create([
            'buku_id'=> $request->buku_id,
            'judul'=> $request->judul,
            'tahun_terbit'=> $request->tahun_terbit,
            'jumlah_stok'=> $request->jumlah_stok,
            'denda_buku'=> $request->denda_buku,

        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dapus = datbuku::findorfail($id);
        return view('/menubuku/editbuku', compact('dapus'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dapus = datbuku::findorfail($id);
        $dapus->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dapus = datbuku::findorfail($id);
        $dapus->delete();
        return redirect('/menubuku/readbuku');
    }
}
