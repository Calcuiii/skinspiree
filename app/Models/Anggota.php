<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Anggota extends Authenticatable
{
    use HasFactory;

    protected $table = 'anggota';
    protected $fillable = ['name', 'password', 'role'];    
    public $timestamps = true;
}
