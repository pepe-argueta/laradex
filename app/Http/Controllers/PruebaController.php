<?php

namespace Laradex\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    /**Display prueba
     * 
     * @return Response
     */
    public function index($param)
    {
        return 'Prueba controller y recibir un parmetro '. $param;
    }
}
