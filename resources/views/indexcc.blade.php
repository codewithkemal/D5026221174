@extends('master2')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')

@endsection

@section('konten')
<form action="/hasilcc" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Kategori</label>
        <select class="form-control" id="hasilcc" name="hasilcc">
            @foreach($kategori as $k)
                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">KIRIM</button>
</form>
@endsection
