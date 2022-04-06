<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamar';

    protected $fillable = ['nama_kamar', 'jumlah_kamar', 'jumlah_tetap', 'harga', 'deskripsi'];

}
