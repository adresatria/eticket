<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        // //total pendapatan
        // $pendapatan = Peminjaman::where('status', '=', 'Accept')->sum('total_harga'); //menghitung total pendapatan yang status peminjaman accept
        // $jumlah_penyewa = Peminjaman::where('status', '=', 'Accept')->whereMonth('mulai_sewa', Carbon::now()->parse()->locale('id')->format('m'))->count(); //menghitung jumlah transaksi yang status peminjaman accept

        // //total transaksi setiap bulan
        // for($i = 1; $i <= 12; $i++){ //perulangan untuk menghitung total transaksi setiap bulan
        //     //menghitung total transaksi setiap bulan
        //     $transaksi[$i] = Peminjaman::where('status', '=', 'Accept')->whereMonth('mulai_sewa', $i)->count();
        // }

        // return view('dashboard', compact('pendapatan', 'jumlah_penyewa', 'transaksi'));
        return view('admin.index');
    }
    
}
