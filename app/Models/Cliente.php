<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function rules()
    {
        return [
            'nome' => 'required|min:3'
        ];
    }

    public function feedback()
    {
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres.'
        ];
    }
}
