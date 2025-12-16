<?php

namespace App\Controllers;

use App\Models\FilmeModel;

class Filmes extends BaseController
{
    public function index()
    {
        $model = new FilmeModel();
        $data['filmes'] = $model->findAll();

        return view('filmes/index', $data);
    }

    public function create()
    {
        return view('filmes/create');
    }

    public function store()
    {
        $model = new FilmeModel();

        $model->save([
            'titulo'    => $this->request->getPost('titulo'),
            'ano'       => $this->request->getPost('ano'),
            'avaliacao' => $this->request->getPost('avaliacao'),
        ]);

        return redirect()->to('/filmes');
    }
}