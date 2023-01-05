<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;


class KategoriApiController extends Controller
{
    public function index() {

        $category = kategori::all();
        return response()->json(['message' => 'Menampilkan Keseluruhan Data', 'data' => $category]);
    }
    public function show($id_kategori) {

        $category = kategori::find($id_kategori);
        return response()->json(['message' => 'Menampilkan Data Berdasarkan Id', 'data' => $category]);
    }
    public function create(Request $request) {

        $category = kategori::create($request->all());
        return response()->json(['message' => 'Data Berhasil ditambahkan', 'data' => $category]);
    }
    public function update(Request $request, $id_kategori)
    {
        $category = kategori::find($id_kategori);
        $category->update($request->all());
        return response()->json(['message' => 'Data Berhasil Di Update', 'data' => $category]);
    }
    public function delete($id_kategori) {

        $category = kategori::find($id_kategori);
        $category->delete();
        return response()->json(['message' => 'Data Berhasil Dihapus', 'data' => 'Penghapusan Sukses']);
    }
}
