<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = 'kasir';

    protected $fillable= ['id_user','kas_awal','waktu_masuk'];

    public function user(){
        return $this->hasMany(User::class,'id_user');
    }
}
