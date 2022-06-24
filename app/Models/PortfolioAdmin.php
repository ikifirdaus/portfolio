<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioAdmin extends Model
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $fillable = ['id', 'gambar', 'tanggal', 'title', 'deskripsi_singkat', 'deskripsi_lengkap', 'url'];
}
