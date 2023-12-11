@extends('master2')

@section('konten')
    <br/>

    <form action="">
        {{ csrf_field() }}

        <div class="col-8">
            @if(isset($kategori))
                <p>Anda telah memilih Kategori dengan Kode: {{ $kategori->ID }}</p>
            @endif
        </div>
    </form>

@endsection
