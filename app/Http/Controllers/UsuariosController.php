<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){

        $email = $request->email;
        $password = $request->password;

        return $email;



        $data['title'] = 'Cadastro';
        $data['titlePage'] = "O nome do produto ";
        $data['icoPage'] = 'fas fa-file-alt';
        return view('produtos.show', $data);
    }

}
