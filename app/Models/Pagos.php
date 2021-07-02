<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{

    protected $fillable = ['cliente_id', 'departamento_id', 'fecha', 'monto', 'user_id'];

    use HasFactory;

    public function clientes(){
        return $this->belongsTo(Cliente::class);
    }

    public function departamentos(){
        return $this->belongsTo(Departamento::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
