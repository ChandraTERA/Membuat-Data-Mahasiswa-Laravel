<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisAth extends Model
{
    use HasFactory;

    protected $table = 'registrasion';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    // protected $hiddern = [
    //     'password',
    //     'remember_token',
    // ];

    // protected $casts = [
    //     'email_verified_at' => 
    // ]

    public $timestamps = true; // Jika menggunakan timestamps, atur menjadi true
    public $timestamp = false;
}
