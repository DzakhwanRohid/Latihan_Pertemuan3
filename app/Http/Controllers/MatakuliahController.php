<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Form untuk menambahkan matakuliah";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return "Menyimpan matakuliah baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $kode)
    {
        if (empty($kode)) {
            return "Masukkan kode matakuliah!";
        }
        return "Anda mengakses matakuliah " . $kode;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Form untuk mengedit matakuliah";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Memperbarui matakuliah";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus matakuliah";
    }
}
