@extends('layout/main')

@section('title' , 'Master Barang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Barang</h1>
            <a href="/barang/create" class="btn btn-primary my-3">Tambah Data!</a>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Merk/Tipe</th>
                        <th scope="col">Warna</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $brg)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $brg->nama_barang }}</td>
                        <td>{{ $brg->harga_barang }}</td>
                        <td>{{ $brg->tipe_barang }}</td>
                        <td>{{ $brg->warna_barang }}</td>
                        <td>
                            <a href="barang/{{$brg -> id_barang }}/edit" class="btn btn-success" type="submit">Edit</a>
                            <form action="barang/{{ $brg->id_barang }}" method="post" class='d-inline'>
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit" data-confirm="Anda yakin akan menghapus data?">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>
@endsection