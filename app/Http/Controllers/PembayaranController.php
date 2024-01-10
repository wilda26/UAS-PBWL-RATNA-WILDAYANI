<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Spp;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PembayaranController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows  = Pembayaran::all();
        $siswa = Siswa::all();
        $spp   = Spp::all();
        return view('pembayaran.index', compact('rows', 'siswa', 'spp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembayaran::create([
            'id_spp' => $request->bulan,
            'id_siswa' => $request->nama,
            'tgl_bayar' => Carbon::now()->format('Y-m-d'),
        ]);

        return redirect('/pembayaran');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
