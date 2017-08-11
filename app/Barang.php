<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['jenis_id', 'merek_barang', 'stock', 'harga_asli', 'harga_jual'];
    
        public function jenis_barang(){
        	return $this->belongsTo('App\Jenis_barang');
        }
    	 public function Transaksi(){ 
    	return $this->hasMany('App\Transaksi');
    }

}
