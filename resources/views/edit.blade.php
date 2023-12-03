@extends('master2')
@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
               <input type = "text" class = "form-control" id = "nama" value="{{ $p->pegawai_nama }}">
            </div>
         </div>
         <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
               <input type = "text" class = "form-control" id = "jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
         </div>

        <div class = "form-group">
           <label for = "umur" class = "col-sm-2 control-label">Umur</label>
           <div class = "col-sm-10">
              <input type = "text" class = "form-control" id = "umur" value="{{ $p->pegawai_umur }}">
           </div>
        </div>

        <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
               <input type = "text" class = "form-control" id = "alamat" value="{{ $p->pegawai_alamat }}">
            </div>
         </div>

         <div class = "form-group">
            <div class = "col-sm-offset-2 col-sm-10">
               <button type = "submit" class = "btn btn-primary">Simpan Data</button>
            </div>
         </div>

	</form>
	@endforeach


@endsection
