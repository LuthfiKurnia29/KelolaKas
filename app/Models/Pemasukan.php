<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Pemasukan extends Model
{
    use HasFactory;
    use Uuid;

    protected $fillable = [
        'asal',
        'nominal',
        'tanggal_terima'
    ];


}
