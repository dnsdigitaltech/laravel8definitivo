<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login($email, $password){
        $data['produto'] = Usuario::find($id);
        $data['title'] =
        $data['titlePage'] = "O nome do produto ";
        $data['icoPage'] = 'fas fa-file-alt';
        return view('produtos.show', $data);
    }

}
