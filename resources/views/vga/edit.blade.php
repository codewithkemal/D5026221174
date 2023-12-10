@extends('master2')

@section('konten')
    <h3>Edit Data VGA</h3>

    <a href="/vga"> Kembali</a>

    <br/>
    <br/>

    @foreach($vga as $v)
        <form action="/vga/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kode" value="{{ $v->kodevga }}"> <br />
            {{-- MERK --}}
            <div class="form-group row">
                <label for="merk" class="col-sm-2 control-label">Merk</label>
                <div class="col-sm-8">
                    <input name="merk" type="text" required="required" class="form-control" id="merk" value="{{ $v->merkvga }}">
                </div>
            </div>
            {{-- STOCK --}}
            <div class="form-group row">
                <label for="stock" class="col-sm-2 control-label">Stock</label>
                <div class="col-sm-8">
                    <input name="stock" type="number" class="form-control" id="stock" value="{{ $v->stockvga }}">
                </div>
            </div>

            <div class="col-sm-2 align-items-center mx-auto">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    @endforeach
@endsection
