<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beli_cash extends Model
{
    protected $fillable = [
        'kode_cash', 'KTP', 
        'mobils_id', 'cash_tgl',
        'cash_bayar'];
    public $timestamps = true;
}
