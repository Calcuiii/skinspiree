<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'anggota';

    // Allow mass assignment for these fields
    protected $fillable = ['name', 'password', 'role']; // Menambahkan 'role' ke dalam fillable

    // If you're using timestamps, make sure this is set to true
    public $timestamps = true;
}
