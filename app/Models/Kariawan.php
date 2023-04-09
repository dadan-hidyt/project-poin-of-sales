<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * model kariawan
 */
class Kariawan extends Model
{
    use HasFactory;
    protected $table = 'tb_karyawan';
    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class,'id_kariawan','id');
    }
}
