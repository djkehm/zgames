<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsolaController extends Controller
{
    public function getMarcas(){
        $marcas = array();
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";
        $marcas[] = "Sega";

        return $marcas;
    }
}

//view productos.blade.php 
// renderizar los productos

//ProductosController:
// - ir a buscar productos a la bd
// -los filtra por los disponibles
// - formatea el precio
// retona lista de productos procesados