<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //diretório que armazena todas as entidades do LARAVEL, servisos prontos usarmos que estão nas pasta VENDOR

class ProdutoController extends Controller
{
    public function index() {
        return "index";
    }

    public function show($id) {
        return "show:".$id;
    }
}
