<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'keluar_kepada',
        'nominal',
        'tanggal_keluar'
    ];
}
