<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index()
    {
        $frutas=DB::table('frutas')
        ->orderBy('id','desc') 
        ->get();

        return view('frutas.index', [ 'frutas' => $frutas ]);
        
    }

    public function detalle($id)
    {
        
        $fruta = DB::table('frutas')->where('id','=',$id)->first();
        
        return view('frutas.detalle', [ 'fruta' => $fruta ] );
    }

    public function create()
    {
        return view('frutas.create');
    }

    public function insert(Request $request)
    {

       $insert = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('y-m-d')
        ));

        return redirect()->action('FrutaController@index');
    }

    public function delete($id)
    {
        
        $delete = DB::table('frutas')->where('id','=',$id)->delete();

        return redirect()->action('FrutaController@index');
    }

    public function editar($id)
    {
        $fruta = DB::table('frutas')->where('id','=',$id)->first();
        return view('frutas.editar',['fruta' => $fruta]);
    }

    public function update($id, Request $request)
    {
        $update= DB::table('frutas')->where('id','=',$id)->update(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('y-m-d')
        ));
        return redirect()->action('FrutaController@index');
    }
}
