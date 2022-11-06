<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Slides;

class HomeController extends Controller
{
    public function index() 
    {
        $dados  = null;
        $perfil = null; 

        $slide = Slides::where('status','1')->get();

        return view('pages.inicio', [
            'slides' => $slide
        ]);
    }

    public function clientes(Request $resquest) 
    {
        $empresas = User::GetClientes();

        return view('pages.load_clientes', [
            'empresas' => $empresas
        ]);
    }
}