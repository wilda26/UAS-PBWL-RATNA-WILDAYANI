<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows        = Siswa::all();
        $generateNis = Siswa::generateNis();
        return view('siswa.index', compact('rows', 'generateNis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'no_hp' => $request->nohp
        ]);

        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $row = Siswa::find($request->id);
        return view('siswa.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $row = Siswa::findOrFail($request->id);
        $row->update([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'no_hp' => $request->nohp,
        ]);

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $row = Siswa::findOrFail($request->id);
        $row->delete();
        return redirect('/siswa');
    }
}
