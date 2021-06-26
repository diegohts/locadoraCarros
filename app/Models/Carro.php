<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;
    protected $fillable = ['modelo_id', 'placa', 'disponivel', 'km'];

    public function rules()
    {
        return [
            'modelo_id' => 'exists:modelos,id',
            'placa' => 'required',
            'disponivel' => 'required|boolean',
            'km' => 'required|integer'
        ];
    }

    public function feedback()
    {
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'integer' => 'O campo :attribute deve ser do tipo inteiro!',
            'boolean' => 'O campo :attribute deve ser do tipo boleano!'
        ];
    }

    public function modelo()
    {
        return $this->belongsTo('App\Models\Modelo');
    }
}
