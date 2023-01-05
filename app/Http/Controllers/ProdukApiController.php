<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukApiController extends Controller
{
    public function index() {

        $produk = Produk::all();
        return response()->json(['message' => 'Menampilkan Keseluruhan Data', 'data' => $produk]);
    }
    public function show($id_produk) {

        $produk = Produk::find($id_produk);
        return response()->json(['message' => 'Menampilkan Data Berdasarkan Id', 'data' => $produk]);
    }
    public function create(Request $request) {

        $produk = Produk::create($request->all());
        return response()->json(['message' => 'Data Berhasil ditambahkan', 'data' => $produk]);
    }
    public function update(Request $request, $id_produk)
    {
        $produk = Produk::find($id_produk);
        $produk->update($request->all());
        return response()->json(['message' => 'Data Berhasil Di Update', 'data' => $produk]);
    }
    public function delete($id_produk) {

        $produk = Produk::find($id_produk);
        $produk->delete();
        return response()->json(['message' => 'Data Berhasil Dihapus', 'data' => 'Penghapusan Sukses']);
    }
}
