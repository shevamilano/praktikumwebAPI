<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budaya;

class BudayaController extends Controller
{
    // Menampilkan semua data budaya
    public function index()
    {
        $budaya = Budaya::all();
        return view('budaya.index', compact('budaya'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('budaya.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
        ]);

        Budaya::create($request->all());
        return redirect()->route('budaya.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $budaya = Budaya::findOrFail($id);
        return view('budaya.edit', compact('budaya'));
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
        ]);

        $budaya = Budaya::findOrFail($id);
        $budaya->update($request->all());
        return redirect()->route('budaya.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus data
    public function destroy($id)
    {
        $budaya = Budaya::findOrFail($id);
        $budaya->delete();
        return redirect()->route('budaya.index')->with('success', 'Data berhasil dihapus!');
    }
}