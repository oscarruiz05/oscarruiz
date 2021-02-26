<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $proyectos = Proyecto::paginate(6);
        return view('home', compact('proyectos'));
    }
}