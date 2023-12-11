@extends('master2')
@section('title', 'Hasil Pemilihan Kategori')

@section('judul_halaman')

@endsection

@section('konten')
    <h1>Anda telah memilih Kategori dengan Kode: {{ $k->kategori }}</h1>
@endsection
