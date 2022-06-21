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
}
