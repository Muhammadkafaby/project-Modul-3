<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
    ];

    // protected $guarded = ['id'];
    // 6706220149-Muhammad Kafaby-4604
}
