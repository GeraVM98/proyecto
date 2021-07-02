<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['nombre', 'encargado', 'descripcion', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function clientes(){
        return $this->belongsToMany(Cliente::class);
    }
}
