<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'domicilio', 'correo', 'telefono', 'nivel_id'];

    public function departamentos(){
        return $this->belongsToMany(Departamento::class);
    }

    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
