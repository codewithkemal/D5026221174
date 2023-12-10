<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VGAController extends Controller
{
    // Menampilkan semua data VGA
    public function index()
    {
        // mengambil data dari table vga
        $vga = DB::table('vga')->get();
        // mengirim data vga ke view vga.index
        return view('vga/index', ['vga' => $vga]);
    }

    // Menampilkan form tambah data VGA
    public function tambah()
    {
        // memanggil view tambah
        return view('vga/tambah');
    }

    // Menyimpan data baru ke dalam tabel VGA
    public function store(Request $request)
    {
        $tersedia = ($request->stock > 0) ? 'Y' : 'N';

        // insert data ke table vga
        DB::table('vga')->insert([
            'merkvga' => $request->merk,
            'stockvga' => $request->stock,
            'tersedia' => $tersedia
        ]);

        // alihkan halaman ke halaman vga index dengan pesan
        return redirect('vga/index')->with('success', 'VGA berhasil ditambahkan!');
    }

    // Menampilkan form edit data VGA
    public function edit($kode)
    {
        // mengambil data vga berdasarkan kode yang dipilih
        $vga = DB::table('vga')
            ->where('kodevga', $kode)
            ->get();

        // passing data vga yang didapat ke view edit.blade.php di folder vga
        return view('vga/edit', ['vga' => $vga]);
    }

    // Menyimpan perubahan data ke dalam tabel VGA
    public function update(Request $request)
    {
        $tersedia = ($request->stock > 0) ? 'Y' : 'N';

        // update data vga
        DB::table('vga')
            ->where('kodevga', $request->kode)
            ->update([
                'merkvga' => $request->merk,
                'stockvga' => $request->stock,
                'tersedia' => $tersedia
            ]);

        // alihkan halaman ke halaman vga index dengan pesan
        return redirect('vga/index')->with('success', 'Data VGA berhasil diperbarui!');
    }

    // Menghapus data dari tabel VGA
    public function hapus($kode)
    {
        // menghapus data vga berdasarkan kode yang dipilih
        DB::table('vga')->where('kodevga', $kode)->delete();

        // alihkan halaman ke halaman vga index dengan pesan
        return redirect('vga/index')->with('success', 'VGA berhasil dihapus!');
    }

    // Mencari data VGA berdasarkan pencarian
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table vga sesuai pencarian data
        $vga = DB::table('vga')
            ->where('kodevga', 'like', "%".$cari."%")
            ->orWhere('merkvga', 'like', "%".$cari."%")
            ->paginate();

        // mengirim data vga ke view index
        return view('vga/index', ['vga' => $vga]);
    }

    // Menampilkan detail data VGA
    public function view($kode)
    {
        // mengambil data vga berdasarkan kode yang dipilih
        $vga = DB::table('vga')
            ->where('kodevga', $kode)
            ->get();

        // passing data vga yang didapat ke view view.blade.php di folder vga
        return view('vga/view', ['vga' => $vga]);
    }
}
