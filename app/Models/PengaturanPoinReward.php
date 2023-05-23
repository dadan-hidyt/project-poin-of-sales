<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanPoinReward extends Model
{
    use HasFactory;
    protected $primaryKey = 'potongan_per_10_poin';
    protected $table = 'table_pengaturan_point_reward';
    protected $fillable = [
        'potongan_per_10_poin'
    ];
    public $timestamps = false;
}
