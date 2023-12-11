<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CCController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('indexcc');
    }

    public function hasil(Request $request)
    {
        $kategoriId = $request->input('kategori');
        $k = Kategori::find($kategoriId);

        return view('hasilcombo');
    }
}
