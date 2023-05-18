<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoinRewardPembelian extends Model
{
    use HasFactory;
    protected $cast = ['hari'];
    protected $guarded = [];
    protected $table = 'tb_poin_reward_pembelian';
}
