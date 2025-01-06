<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['dosen'] = \App\Models\Dosen::latest('ascending')->paginate(10);
        return view('dosen_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestdata = $request->validate([
            'nama' => 'required|min:3',
            'nidn' => 'required|numeric',
            'jenis_kelamin' => 'required|in:L,P', // Validasi jenis kelamin: hanya L atau P
            'alamat' => 'required|string|max:255' // Validasi alamat
        ]);
        $dosen = new \App\Models\Dosen();
        $dosen->fill($requestdata);
        $dosen->save();
        flash('Data Berhasil Di Simpan')->success();
        Return back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
