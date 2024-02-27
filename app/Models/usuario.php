<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'nomeUsuario',
        'emailUsuario',
        'senhaUsuario',
        'tipoUsuarioId',
        'tipoUsuarioType',
        'emailVerificado'];

    public function tipo_usuario(){
        return $this->morphTo( 'tipo_usuario', 'tipoUsuarioType', 'tipoUsuarioId');
    }

}
