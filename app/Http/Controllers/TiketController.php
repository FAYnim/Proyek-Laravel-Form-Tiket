<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TiketController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_event' => 'required|string|max:255',
            'nama_pembeli' => 'required|string|max:255',
            'jumlah_tiket' => 'required|integer|min:1|max:10',
            'harga_tiket' => 'required|integer|min:0',
        ], [
            'nama_event.required' => 'Nama event wajib diisi.',
            'nama_pembeli.required' => 'Nama pembeli wajib diisi.',
            'nama_pembeli.string' => 'Nama pembeli harus berupa teks.',
            'nama_pembeli.max' => 'Nama pembeli maksimal 255 karakter.',
            'jumlah_tiket.required' => 'Jumlah tiket wajib diisi.',
            'jumlah_tiket.integer' => 'Jumlah tiket harus berupa angka.',
            'jumlah_tiket.min' => 'Jumlah tiket minimal 1.',
            'jumlah_tiket.max' => 'Jumlah tiket maksimal 10.',
            'harga_tiket.required' => 'Harga tiket wajib diisi.',
            'harga_tiket.integer' => 'Harga tiket harus berupa angka.',
            'harga_tiket.min' => 'Harga tiket tidak boleh negatif.',
        ]);

        $total = $validated['harga_tiket'] * $validated['jumlah_tiket'];

        Tiket::create([
            'nama_event' => $validated['nama_event'],
            'nama_pembeli' => $validated['nama_pembeli'],
            'jumlah_tiket' => $validated['jumlah_tiket'],
            'harga_tiket' => $validated['harga_tiket'],
            'total_harga' => $total,
        ]);

        return Redirect::back()->with('success', 'Pemesanan tiket berhasil disimpan.');
    }

    public function daftar()
    {
        $pembelian = Tiket::latest()->get();

        return view('daftar-pembeli', compact('pembelian'));
    }
}
