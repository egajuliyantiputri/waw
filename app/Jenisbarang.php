<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisbarang extends Model
{
    //
    protected $fillable = ['jenis_barang'];

        public function barang(){
        return $this->hasMany('App\barang');
    }
    	public function Transaksi(){
    	return $this->hasMany('App\Transaksi');
    }
}
