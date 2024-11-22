<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'dia'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('codigo');
    }
}
