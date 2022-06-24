<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeDashboard extends Model
{
    use HasFactory;
    protected $table = 'home';
    protected $fillable = ['id', 'gambar_home', 'title_home', 'deskripsi_home', 'email', 'telephone'];
}
