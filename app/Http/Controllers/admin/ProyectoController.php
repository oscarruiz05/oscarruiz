<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    public $date;

    public function __construct() {
        $this->date = Carbon::now('America/Bogota');
        $this->middleware('auth');
    }

    public function index(Proyecto $proyecto){
        $proyectos = Proyecto::paginate(5);
        return view('admin.proyectos.index', compact('proyectos'));
    }

    public function store(Request $request){
        $extension_file_documento = pathinfo($request->file('imagen')->getClientOriginalName(), PATHINFO_EXTENSION);
        $ruta_file_documento = 'admin/proyectos/';
        $nombre_file_documento = 'imagen_'.$this->date->isoFormat('YMMDDHmmss').'.'.$extension_file_documento;
        Storage::disk('public')->put($ruta_file_documento.$nombre_file_documento, File::get($request->file('imagen')));

        $nombre_completo_file_documento = $ruta_file_documento.$nombre_file_documento;
        $proyecto = Proyecto::create([
            'fecha' => $this->date->format('Y-m-d'),
            'nombre' => $request['nombre'],
            'slug' => Str::slug($request['nombre']),
            'imagen' => $nombre_completo_file_documento,
            'link' => $request['link']
        ]);
        return redirect()->route('admin.proyectos')->with(['create' => 1, 'mensaje' => 'proyecto creado correctamente']);
    }
}
