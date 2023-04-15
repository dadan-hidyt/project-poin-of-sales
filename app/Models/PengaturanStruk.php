<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanStruk extends Model
{
    use HasFactory;
    protected $table = 'struk_setting';
    protected $primaryKey ='id';
    protected $guarded = [];
}
