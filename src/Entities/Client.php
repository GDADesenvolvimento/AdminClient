<?php

namespace GdaDesenv\AdminClient\Entities;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nome',
        'cnpj',
        'nome_fantasia',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'municipio',
        'uf',
        'site',
        'email',
        'telefone_fixo',
        'telefone_movel',
        'atividade_principal',
        'responsavel',
    ];
}
