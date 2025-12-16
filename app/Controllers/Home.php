// app/Controllers/Home.php
namespace App\Controllers;
use App\Models\FilmeModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new FilmeModel();
        $data['filmes'] = $model->findAll();
        return view('home', $data);
    }
}