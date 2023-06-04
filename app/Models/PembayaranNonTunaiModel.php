<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranNonTunaiModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pembayaran_non_tunai';

    protected $fillable = [
        'debit_name',
        'pay_category',
    ];
}
