<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'imagem'];

    public function rules()
    {
        /*
            A validacao do tipo Unique contem 3 parametros
            1. A tabela
            2. Nome da coluna que sera pesquisado, por default fica implicito a coluna input 
            3. Id do registro que sera desconsiderado na pesquisa
        */
        return [
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',
            'imagem' => 'required|file|mimes:png'
        ];
    }

    public function feedback()
    {
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'nome.unique' => 'O nome da marca já existe!',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.',
            'imagem.mimes' => 'O arquivo deve ser uma imagem do tipo PNG.'
        ];
    }
}
