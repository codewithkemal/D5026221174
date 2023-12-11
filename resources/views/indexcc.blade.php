@extends('master2')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')

@endsection

@section('konten')
<form method="POST" action="{{ route('hasilcombo') }}">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Kategori</label>
        <select class="form-control" id="exampleFormControlSelect1" name="kategori">
            @foreach($kategori as $k)
                <option value="{{ $k->id }}">{{ $k->nama }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">KIRIM</button>
</form>
@endsection
