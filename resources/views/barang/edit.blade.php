@extends('layout/main')

@section('title' , 'Form Barang')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Form Edit Barang</h1>

            <form method="post" action="/barang {{ $barang->id_barang }}">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" id="nama" placeholder="Masukkan nama barang" value="{{ $barang->nama_barang }}" >
                    @error ('nama_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga_barang" class="form-control @error('harga_barang') is-invalid @enderror" id="harga" placeholder="Masukkan harga barang" value="{{ $barang->harga_barang }}">
                    @error ('harga_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <input type="text" name="tipe_barang" class="form-control @error('tipe_barang') is-invalid @enderror" id="tipe" placeholder="Masukkan tipe barang" value="{{ $barang->tipe_barang }}">
                    @error ('tipe_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" name="warna_barang" class="form-control @error('warna_barang') is-invalid @enderror" id="warna" placeholder="Masukkan warna barang" value="{{ $barang->warna_barang }}">
                    @error ('warna_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">Edit Data</button>
                <a href="/barang" class="btn btn-info">Kembali</a>
                
            </form>
        </div>
    </div>
</div>
@endsection