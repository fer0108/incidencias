<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidades';

    public function perfiles()
    {
        return $this->hasMany(Perfil::class);
    }
}
