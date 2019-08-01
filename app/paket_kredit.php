<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket_kredit extends Model
{
    protected $fillable = [
        'kode_paket', 'harga_paket', 'uang_muka',
         'jumlah_cicilan', 'bunga', 'nilai_cicilan'];
    public $timestamps = true;
}
