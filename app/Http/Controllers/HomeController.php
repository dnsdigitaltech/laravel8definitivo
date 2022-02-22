<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        return "Você entrou na raiz do projeto";
    }

}
