<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desarrolladora extends Model
{
    use HasFactory;

    public function distribuidora()
    {
        return $this->belongsTo(Distribuidora::class);
    }

    public function videojuegos()
    {
        return $this->hasMany(Videojuego::class);
    }
}
