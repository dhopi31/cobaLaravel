<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //kalau misalkan table defaultnya beda maka 
    //protected $table = 'Barang';
    protected $fillable = ['nama_barang','harga_barang','tipe_barang','warna_barang'];
    protected $primaryKey ='id_barang';
}
