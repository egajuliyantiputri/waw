<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $fillable = ['nama', 'alamat', 'no_hp'];
    
    	public function Transaksi(){
    	return $this->hasMany('App/Transaksi');
    }
}
