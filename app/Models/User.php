<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
protected $with = ['kasir'];
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_kariawan',
        'name',
        'email',
        'role',
        'login_token',
        'nama_user',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function karyawan(){
        return $this->belongsTo(Kariawan::class,'id_kariawan');
    }
    public function kasir(){
        return $this->hasMany(Kasir::class,'id_user');
    }

    public function getKasir(){
        $kasir = $this->kasir->where('waktu_keluar',NULL)->first();
        return $kasir;
    }
    
}
