<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanBarang extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'satuan_barang';
    public $timestamps = false;


}
