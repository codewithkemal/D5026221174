@extends('master2')

@section('konten')
    <h3>Data VGA</h3>
    <a href="/vga"> < Kembali</a>

    <br/>

    @foreach($vga as $v)
    <form action="/vga/store" method="post">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-4 border">
                    {{-- (Anda bisa menambahkan gambar VGA di sini) --}}
                </div>
                <div class="col-8">
                    <!-- KODE -->
                    <div class="form-group row">
                        <label for="kode" class="col-sm-2 control-label">Kode:</label>
                        <div class="col-sm-10">
                            <input type = "text" readonly class = "form-control" id = "kodevga" value="{{ $v->kodevga }}">
                        </div>
                    </div>
                    <!-- MERK -->
                    <div class="form-group row">
                        <label for="merk" class="col-sm-2 control-label">Merk:</label>
                        <div class="col-sm-10">
                            <input type = "text" readonly class = "form-control" id = "merkvga" value="{{ $v->merkvga }}">
                        </div>
                    </div>
                    <!-- STOCK -->
                    <div class="form-group row">
                        <label for="stock" class="col-sm-2 control-label">Stock:</label>
                        <div class="col-sm-10">
                            <input type = "text" readonly class = "form-control" id = "stockvga" value="{{ $v->stockvga }}">
                        </div>
                    </div>
                    <!-- KETERSEDIAAN -->
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 control-label">Ketersediaan (Y/N):</label>
                        <div class="col-sm-10">
                            <input type = "text" readonly class = "form-control" id = "tersedia" value="{{ $v->tersedia }}">
                        </div>
                    </div>

                    <div class="col-sm-2 align-items-center mx-auto">
                        <a href="/vga" class="btn btn-primary btn-block">OK</a>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
