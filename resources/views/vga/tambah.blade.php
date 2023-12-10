@extends('master2')

@section('konten')
    <h3>Tambah Data VGA</h3>

    <a href="/vga"> < Kembali</a>

    <br/>
    <br/>

    <form action="/vga/store" method="post">
        {{ csrf_field() }}
        {{-- MERK --}}
        <div class="form-group row">
            <label for="merk" class="col-sm-2 control-label">Merk</label>
            <div class="col-sm-8">
                <input name="merk" type="text" class="form-control" id="merk" placeholder="Masukkan Merk VGA">
            </div>
        </div>
        {{-- STOCK --}}
        <div class="form-group row">
            <label for="stock" class="col-sm-2 control-label">Stock</label>
            <div class="col-sm-8">
                <input name="stock" type="number" class="form-control" id="stock" placeholder="Masukkan Stock VGA">
            </div>
        </div>

        <div class="col-sm-2 align-items-center mx-auto">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>
@endsection
