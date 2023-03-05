<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/overview');
    }
    public function about($nama = null, $Umur = 0)
    
    {echo "Hi nama saya adalah $nama. Usia saya $Umur tahun.";
    }
}
