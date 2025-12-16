<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmeModel extends Model
{
    protected $table = 'filmes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'titulo',
        'ano',
        'avaliacao'
    ];
}