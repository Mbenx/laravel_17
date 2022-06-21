<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    } 
    
    
    //indexOld
    public function indexOld()
    {
        $title = "Halaman Home";
        $bodyTitle = "Hello Course-Net";
        $name = "wimora";
        
        return view('home.indexOld',[
            'judul' => $title,
            'bodyTitle' => $bodyTitle,
            'name' => $name,
        ]);
    }

    public function showName($name)
    {
        $title = "Halaman Name";
        $nama = $name;
        
        return view('home.name',[
            'title' => $title,
            'name' => $nama,
        ]);
    }

    public function trialKaryawan()
    {
        $title = "Halaman Karyawan";
        
        return view('home.karyawan',[
            'title' => $title
        ]);
    }

    public function trialPengunjung()
    {
        $title = "Halaman Pengunjung";
        
        return view('home.pengunjung',[
            'title' => $title
        ]);
    }
}
