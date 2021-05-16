<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1)
    {
        $titulo = 'listado de peliculas';

        return view('peliculas.index')
                ->with('titulo', $titulo)
                ->with('pagina', $pagina);  

    }

    public function detalle($year = null)
    {
        return view('pelicula.detalle');
    }
}
