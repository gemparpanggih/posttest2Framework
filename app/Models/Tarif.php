<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = 'tarifs';
    protected $fillable = ['id', 'kodetarif', 'voltase', 'biaya/kWh' ];
}
