<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   

    /**
     * Lista os Comentarios
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function comentarios()
    {
        $comentarios = \App\Comentario::all();
        return view('site.home');
    }
}
