<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $fillable = ['karyawan_id', 'jenis_id', 'barang_id', 'barang_id', 'jumlah', 'tanggal_transaksi'];
    
    	public function barang(){
    	return $this->belongsTo('App/barang');
 
 }   
}
