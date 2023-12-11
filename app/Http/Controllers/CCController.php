<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CCController extends Controller
{
    public function showForm()
    {
        $kategori = DB::table('kategori')->get();

        return view('indexcc')->with('kategori', $kategori);
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'hasilcc' => 'required|exists:kategori,ID',
        ]);

        $selectedOptionId = $request->input('hasilcc');

        return redirect('/hasilcc')->with('selectedOptionId', $selectedOptionId);
    }

    public function showResult(Request $request)
    {
        $selectedOptionId = $request->session()->get('selectedOptionId');
        $kategori = DB::table('kategori')->find($selectedOptionId);

        return view('hasilcc')->with('kategori', $kategori);
    }
}
