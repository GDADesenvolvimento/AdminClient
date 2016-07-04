<?php

namespace GdaDesenv\AdminClient\Entities;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nome',
        'cnpj',
        'cpf',
        'email_contato',
        'email_cobranca',
        'telefone_contato',
        'telefone_cobranca',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'municipio',
        'uf',
    ];
}
