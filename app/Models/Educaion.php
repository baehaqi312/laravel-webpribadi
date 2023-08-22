<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educaion extends Model
{
    use HasFactory;

    protected $table = 'educaion';

    protected $fillable = [
        'nama', 'namasekolah', 'tahun',
    ];
}
