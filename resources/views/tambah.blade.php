@extends('master2')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai">< Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pegawai" required="required">
        </div>
    </div>

    <div class="form-group">
        <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" required="required">
        </div>
    </div>

    <div class="form-group">
        <label for="umur" class="col-sm-2 control-label">Umur</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur" required="required">
        </div>
    </div>

    <div class="form-group">
        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required="required">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </div>
</form>


@endsection
