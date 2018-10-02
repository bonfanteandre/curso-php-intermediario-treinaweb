<?php
namespace App\Controllers;

use Foundation\Controller;
use App\Models\Pessoa;

class IndexController extends Controller
{
    public function index()
    {
        $pessoa = new Pessoa;
        $pessoas = $pessoa->getAll();

        return $this->render('index', [
            'pessoas' => $pessoas
        ]);
    }
}
