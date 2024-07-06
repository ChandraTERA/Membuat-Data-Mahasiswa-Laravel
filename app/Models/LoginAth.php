<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginAth extends Model
{
    use HasFactory;
    // public function setPasswordAttribute($password)
        protected $table = 'login';
        protected $primaryKey = 'id';
        protected $fillable = [
            'email',
            'password',
        ];
        
        // protected $hidden = [
        //     'password',
        //     'remember_token',
        // ];

        // protected $casts = [
        //     'email_verified_at' => 'datetime',
        // ];


        public $timestamps = true; // Jika menggunakan timestamps, atur menjadi true
        public $timestamp =false;

        // $this->attributes['password'] = bcrypt($password);
}
