<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierApiController extends Controller
{
    public function index() {

        $supplier = Supplier::all();
        return response()->json(['message' => 'Menampilkan Keseluruhan Data', 'data' => $supplier]);
    }
    public function show($id_supplier) {

        $supplier = Supplier::find($id_supplier);
        return response()->json(['message' => 'Menampilkan Data Berdasarkan Id', 'data' => $supplier]);
    }
    public function create(Request $request) {

        $supplier = Supplier::create($request->all());
        return response()->json(['message' => 'Data Berhasil ditambahkan', 'data' => $supplier]);
    }
    public function update(Request $request, $id_supplier)
    {
        $supplier = Supplier::find($id_supplier);
        $supplier->update($request->all());
        return response()->json(['message' => 'Data Berhasil Di Update', 'data' => $supplier]);
    }
    public function delete($id_supplier) {

        $supplier = Supplier::find($id_supplier);
        $supplier->delete();
        return response()->json(['message' => 'Data Berhasil Dihapus', 'data' => 'Penghapusan Sukses']);
    }
}
