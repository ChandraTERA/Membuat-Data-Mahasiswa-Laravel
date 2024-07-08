<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $table = 'upload_foto'; // Perhatikan penulisan nama tabel yang benar
    protected $primaryKey = 'id';
    protected $fillable = [
        'picture',
        'username',
        'name',
        'privilege',    
    ];
    public $timestamps = true; // Jika menggunakan timestamps, atur menjadi true
    public $timestamp =true;

    
}
