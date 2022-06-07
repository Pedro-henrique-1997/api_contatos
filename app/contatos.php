<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contatos extends Model
{
    protected $table = 'contatos';

    protected $fillable = ['id', 'id_empresa', 'nome', 'sobrenome', 'data', 'telefone', 'celular', 'email'];

    public function dadosEmp()
    {
    	return $this->hasOne('App\empresa', 'id', 'id_empresa');
    }
}
