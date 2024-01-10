<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Spp::all();
        return view('spp.index', compact('rows'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Spp::find($id);
        return view('spp.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $row = Spp::findOrFail($request->id);
        $row->update([
            'nominal' => $request->nominal,
        ]);

        return redirect('/spp');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spp $spp)
    {

    }
}
