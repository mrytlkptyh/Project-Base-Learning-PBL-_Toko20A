<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


class MemberApiController extends Controller
{
    public function index() {

        $member = Member::all();
        return response()->json(['message' => 'Menampilkan Keseluruhan Data', 'data' => $member]);
    }
    public function show($id_member) {

        $member = Member::find($id_member);
        return response()->json(['message' => 'Menampilkan Data Berdasarkan Id', 'data' => $member]);
    }
    public function create(Request $request) {

        $member = Member::create($request->all());
        return response()->json(['message' => 'Data Berhasil ditambahkan', 'data' => $member]);
    }
    public function update(Request $request, $id_member)
    {
        $member = Member::find($id_member);
        $member->update($request->all());
        return response()->json(['message' => 'Data Berhasil Di Update', 'data' => $member]);
    }
    public function delete($id_member) {

        $member = Member::find($id_member);
        $member->delete();
        return response()->json(['message' => 'Data Berhasil Dihapus', 'data' => 'Penghapusan Sukses']);
    }
}
