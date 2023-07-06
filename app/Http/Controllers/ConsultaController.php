<?php

namespace App\Http\Controllers;
use App\Models\Negocio;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    //
    public function index()
    {
        $datos['negocios']=Negocio::paginate(10);
        //direccionar a la vista principal 
        return view('welcome', $datos);
    }
}
