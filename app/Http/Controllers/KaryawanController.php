<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        //query builder
        $karyawan = DB::table('karyawan')->get();

        return view('karyawan.home',[
            'data' => $karyawan,
            'title' => "Karyawan",
        ]);
    }

    public function create()
    {
        return view('karyawan.create',[
            'title' => "Insert Karyawan"
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);

        //query builder
        DB::table('karyawan')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $data = DB::table('karyawan')->where('id','=',$id)->first();
        return view('karyawan.edit',[
            'data' => $data,
            'title' => "Edit Karyawan"
        ]);
    }

    public function update(Request $req)
    {
        DB::table('karyawan')
            ->where('id','=',$req->id)
            ->update([
                'nama' => $req->nama,
                'alamat' => $req->alamat,
                'jabatan' => $req->jabatan,
            ]);
        return redirect('/karyawan');
    }

    public function destroy($id)
    {
        $data = DB::table('karyawan')
            ->where('id','=',$id)->delete();
        return redirect('/karyawan');
    }
}
