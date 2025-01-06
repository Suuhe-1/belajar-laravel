<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['mahasiswa'] = \App\Models\Mahasiswa::latest('')->paginate(5);
        return view('mahasiswa_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestdata = $request->validate([
            'nama' => 'required|min:3',
            'nim' => 'required|numeric'
        ]);
        $mahasiswa = new \App\Models\Mahasiswa();
        $mahasiswa -> fill($requestdata);
        $mahasiswa -> save();
        flash('Data Berhasil Di Simpan')->success();
        return back();
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
