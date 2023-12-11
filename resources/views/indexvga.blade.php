@extends('master2')

@section('title', 'Database VGA')

@section('judul_halaman')
    <h3>Data VGA</h3>
    <a href="/vga/tambah">+ Tambah VGA Baru</a>
    <br/>
    <br/>
@endsection

@section('konten')
    {{-- Pesan Success --}}
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <p>Cari Data VGA :</p>
    <form action="/vga/cari" method="post">
        @csrf
        <input class="form-control" type="text" name="cari" placeholder="Cari VGA Berdasarkan Nama..." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode VGA</th>
            <th>Merk VGA</th>
            <th>Stock VGA</th>
            <th>Ketersediaan (Y/N)</th>
            <th>Opsi</th>
        </tr>
        @forelse($vga as $v)
            <tr>
                <td>{{ $v->kodevga }}</td>
                <td>{{ $v->merkvga }}</td>
                <td>{{ $v->stockvga }}</td>
                <td style="background-color: {{ ($v->stockvga > 0) ? 'blue' : 'red' }}; color: white;">
                    {{ ($v->stockvga > 0) ? 'Y' : 'N' }}
                </td>
                <td>
                    <a href="/vga/view/{{ $v->kodevga }}" class="btn btn-success">View</a>
                    |
                    <a href="/vga/edit/{{ $v->kodevga }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/vga/hapus/{{ $v->kodevga }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Data VGA tidak ditemukan.</td>
            </tr>
        @endforelse
    </table>
    {{ $vga->links() }}
@endsection
