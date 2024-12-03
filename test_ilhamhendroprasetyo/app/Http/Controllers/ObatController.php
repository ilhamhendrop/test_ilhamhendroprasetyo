<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class ObatController extends Controller
{
    public function index() {
        $obats = Obat::all();

        return view('dashboard.obat.index', compact('obats'));
    }

    public function store_obat(Obat $obat, Request $request) {
        $request->validate([
            'name' => 'required',
            'tgl_kadaluarsa' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
        ], [
            'name.required' => 'Tidak boleh kosong',
            'tgl_kadaluarsa' => 'Tidak boleh kosong',
            'stok' => 'Tidak boleh kosong',
            'satuan' => 'Tidak boleh kosong',
            'harga_beli' => 'Tidak boleh kosong',
            'harga_jual' => 'Tidak boleh kosong'
        ]);

        $obat->create([
            'name' => $request->name,
            'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
            'stok' => $request->stok,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);

        return Redirect::back()->with('succes', 'Succes');
    }

    public function edit_obat(Obat $obat) {
        return view('dashboard.obat.edit', compact('obat'));
    }

    public function update_obat(Obat $obat, Request $request) {
        $request->validate([
            'name' => 'required',
            'tgl_kadaluarsa' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
        ], [
            'name.required' => 'Tidak boleh kosong',
            'tgl_kadaluarsa' => 'Tidak boleh kosong',
            'stok' => 'Tidak boleh kosong',
            'satuan' => 'Tidak boleh kosong',
            'harga_beli' => 'Tidak boleh kosong',
            'harga_jual' => 'Tidak boleh kosong'
        ]);

        $obat->update([
            'name' => $request->name,
            'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
            'stok' => $request->stok,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);

        return Redirect::route('obat.index')->with('succes', 'Berhasil');
    }

    public function delete_obat(Obat $obat) {
        $obat->delete();

        return Redirect::back()->with('succes', 'Berhasil');
    }
}
