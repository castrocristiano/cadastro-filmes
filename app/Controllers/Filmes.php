<?php
namespace App\Controllers;
use App\Models\FilmeModel;

class Filmes extends BaseController {
    public function index() {
        $model = new FilmeModel();
        $data['filmes'] = $model->findAll();
        return view('filmes_lista', $data);
    }
    public function criar() {
        return view('filmes_form');
    }
    public function salvar() {
        $model = new FilmeModel();
        $model->insert([
            'titulo' => $this->request->getPost('titulo'),
            'ano' => $this->request->getPost('ano'),
            'avaliacao' => $this->request->getPost('avaliacao')
        ]);
        return redirect()->to('/filmes');
    }
}
