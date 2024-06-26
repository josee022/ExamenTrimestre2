<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    public function desarrolladora()
    {
        return $this->belongsTo(Desarrolladora::class);
    }

    public function propietarios()
    {
        return $this->belongsToMany(User::class, 'posesiones');
    }
}
