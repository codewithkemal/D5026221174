<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VgaController extends Controller
{
    // Menampilkan semua data VGA
    public function index()
    {
        // mengambil data dari table vga
        $vga = DB::table('vga')->simplepaginate(10);

        return view('indexvga', ['vga' => $vga]);
    }

        // Menampilkan form tambah data VGA
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahvga');
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

        // alihkan halaman ke halaman vga indexvga dengan pesan
        return redirect('/vga')->with('success', 'VGA berhasil ditambahkan!');
    }

    // Menampilkan form edit data VGA
    public function edit($kode)
    {
        // mengambil data vga berdasarkan kode yang dipilih
        $vga = DB::table('vga')->where('kodevga', $kode)->get();

        // passing data vga yang didapat ke view editvga.blade.php di folder vga
        return view('editvga', ['vga' => $vga]);
    }

    // Menyimpan perubahan data ke dalam tabel VGA
    public function update(Request $request)
    {
        // Pastikan untuk mendeklarasikan $tersedia sebelum menggunakannya
        $tersedia = ($request->stock > 0) ? 'Y' : 'N';

        // Update data vga
        DB::table('vga')->where('kodevga', $request->kode)->update([
            'merkvga' => $request->merk,
            'stockvga' => $request->stock,
            'tersedia' => $tersedia
        ]);

        // Alihkan halaman ke halaman vga indexvga dengan pesan
        return redirect('/vga')->with('success', 'Data VGA berhasil diperbarui!');
    }

    public function hapus($kode)
    {
        // menghapus data vga berdasarkan kode yang dipilih
    DB::table('vga')->where('kodevga', $kode)->delete();

    // ambil data vga setelah penghapusan
    $vga = DB::table('vga')->paginate(5);

    // kirim data vga dan pesan success ke view
    return view('indexvga', ['vga' => $vga, 'success' => 'VGA berhasil dihapus!']);
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

        // mengirim data vga ke view indexvga
        return view('indexvga', ['vga' => $vga]);
    }

    // Menampilkan detail data VGA
    public function view($kode)
    {
        // mengambil data vga berdasarkan kode yang dipilih
        $vga = DB::table('vga')
            ->where('kodevga', $kode)
            ->get();

        // passing data vga yang didapat ke view viewvga.blade.php di folder vga
        return view('viewvga', ['vga' => $vga]);
    }
}
