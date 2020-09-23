@extends('layout/main')

@section('title' , 'Master Barang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Barang</h1>

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
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>
@endsection