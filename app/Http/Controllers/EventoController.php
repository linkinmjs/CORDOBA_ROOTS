<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Evento;

class EventoController extends Controller
{
    public function __construct()
    {
       $this->middleware("auth");
    }
    protected $loginPath = '/ingreso';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eventos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->get('nombre'));
        // dd($request->all())

        $this->validate($request, [
            'nombre' => 'required',
            'direccion' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
        ]);

        $evento = Evento::create([ 
            'usuario_id'=>$request->user()->id,
            'nombre'=>$request->get('nombre'),
            'direccion'=>$request->get('direccion'),
            'descripcion'=>$request->get('descripcion'),
        ]);
        
        $imagen = $request->file('imagen');
        Storage::put('asd'.'.jpg',file_get_contents($imagen));


        if ($evento){
            return redirect ('/');
        }
        else{        
            return back()->withInput()->withErrors([
                'Complete correctamente los campos'
            ]);
        }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
