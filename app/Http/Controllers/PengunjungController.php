<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function pengunjung(){
        return view('pengunjung.index');
    }
}
