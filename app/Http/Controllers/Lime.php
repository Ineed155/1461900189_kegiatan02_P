<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lime extends Controller
{
    public function orange(){
        $book = DB::table('buku')
            ->select('buku_judul')
            ->get();
        $bookwhere = DB::table('buku')
            ->select('buku_judul')
            ->where('buku_judul','Slider')
            ->get();
         $bookjoin = DB::table('buku')
            ->join('buku_id', '=', 'kategori_id')
            ->select('judul_buku*', 'kategori*')
            ->get();
        $bookjoinwhere
        $bookjoin = DB::table('buku')
            ->join('buku_id', '=', 'kategori_id')
            ->select('judul_buku*', 'kategori*')
            ->where('buku_id','=','1')
            ->get();
    }
}
