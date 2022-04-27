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
    }

    public function index(Proyecto $proyecto){
        $proyectos = Proyecto::paginate(5);
        return view('admin.proyectos.index', compact('proyectos'));
    }

    public function store(Request $request){
        $imagen = $request->file('imagen')->store('public/admin/proyectos');
        $url = Storage::url($imagen);

        $proyecto = Proyecto::create([
            'fecha' => $this->date->format('Y-m-d'),
            'nombre' => $request['nombre'],
            'slug' => Str::slug($request['nombre']),
            'imagen' => $url,
            'link' => $request['link']
        ]);
        return redirect()->route('admin.proyectos')->with(['create' => 1, 'mensaje' => 'proyecto creado correctamente']);
    }

    public function show($id){
        $proyecto = Proyecto::find($id);
        return response()->json([
            'data' => $proyecto
        ]);
    }

    public function update($id, Request $request){
        $proyecto = Proyecto::find($id);
        $proyecto->update([
            'nombre' => $request['nombre'],
            'slug' => Str::slug($request['nombre']),
            'link' => $request['link']
        ]);
        if($request->file('imagen')){
            /* buscar y elimina imagen */
            $delete_url = str_replace('storage', 'public', $proyecto->imagen);
            Storage::delete($delete_url);
            /* actualiza imagen */
            $imagen = $request->file('imagen')->store('public/admin/proyectos');
            $url = Storage::url($imagen);

            $proyecto->update(['imagen' => $url]);
        }
        return redirect()->route('admin.proyectos')->with(['create' => 1, 'mensaje' => 'proyecto actualizado correctamente']);
    }

    public function delete($id){
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect()->route('admin.proyectos')->with(['create' => 1, 'mensaje' => 'proyecto eliminado correctamente']);
    }
}
