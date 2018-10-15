<?php

namespace App\Http\Controllers;
use App\Historia;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class HistoriaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {   
        $apellidos = $request->get('apellidos');
        $cedula = $request->get('cedula');
        $codigo = $request->get('codigo');
      //  dd($request);
        $historia=Historia::orderBy('id', 'DESC')
        ->apellidos($apellidos)
        ->cedula($cedula)
        ->codigo($codigo)
        ->paginate(5);
     

        return view('historias.index', compact('historia'));

    
    }
    
    
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$historia = Historia::all();
     
      
        
        return view('historias.create', compact('historia'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
    
  
         //Validacion de los campos. 
        /* $this->validate($request,[
            'nombres' => 'required|unique:posts|max:255',
            'cedula' => 'required',
            'sexo' => 'required',
            'dato' => 'required|unique:posts|max:10',
            'cedula' => 'required|unique:posts|max:10',
            'cargo' => 'required|unique:posts|max:45',
        ]);*/

    //instanciar el metodo, para el almacenamiento

            $now=Carbon::now();
            $historia = new Historia;
            $historia->cedula = $request->cedula;
            $historia->fechaIngreso = $now->format('Y-m-d');
            $historia->codigo = $request->codigo;
            $historia->nombres = $request->nombres;
            $historia->apellidos = $request->apellidos;
            $historia->edad = $request->edad;
            $historia->direccion = $request->direccion;
            $historia->telefono = $request->telefono;
            //$historia->telefono2 = $request->telefono2;
            $historia->app = $request->app;
            $historia->apf = $request->apf;
            $historia->ocupacion = $request->ocupacion;

            $historia->ta = $request->ta;
            $historia->montivoConsulta = $request->montivoConsulta;
            $historia->evaluacionFisica = $request->evaluacionFisica;
            $historia->diagnostico = $request->diagnostico;
            $historia->tratamineto = $request->tratamineto;
            $historia->observaciones = $request->observaciones;
          


  

            $historia->save();
            

    //Redireccion

    return redirect()->route('historia.index');
    }

}
