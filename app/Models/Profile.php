<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = ['id', 'gambar_profile', 'deskripsi_profile', 'age', 'freelance', 'telephone', 'residence', 'address', 'email'];
}
