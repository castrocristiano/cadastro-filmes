$routes->get('/', 'Home::index');
$routes->get('filmes', 'Filmes::index');
$routes->get('filmes/criar', 'Filmes::create');   // <-- método 'create'
$routes->post('filmes/salvar', 'Filmes::store'); // <-- método 'store'