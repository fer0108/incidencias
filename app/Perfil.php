<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';

    public function sexo()
    {
        return $this->belongsTo(Sexo::class);
    }

    public function entidad()
    {
        return $this->belongsTo(Entidad::class);
    }
}
