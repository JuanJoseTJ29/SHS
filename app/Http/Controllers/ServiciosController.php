<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $datos['servicios']=Servicios::paginate(3);

        return view('servicios.index',$datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosServicio=request()->all();

        $campos=[
            'Titulo'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto es requerida'
        ];

        $this->validate($request,$campos,$mensaje);

        //$datosservicio=request()->all();
        $datosservicio=request()->except('_token');
        if($request->hasFile('Foto')){
            $datosservicio['Foto']=$request->file('Foto')->store('uploads','public');
        }
        servicios::insert($datosservicio);
        //return response()->json($datosservicio);
        return redirect('servicios')->with('mensaje','servicios agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $servicio= Servicios::findOrFail($id); // recepciona la informacion que nos envian a travez de la url y busca a todos los empleado o empleados que tengan ese id ($Nombre)
        //$empleado = Empleados::find($id);
        return view ('servicios.edit', compact('servicio'));// lo que esta haciendo es enviar la informacion del empleado a travez del retorno de la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Titulo'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>':attribute es requerido',
        ];
        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La foto es requerida'];
        }
        $this->validate($request,$campos,$mensaje);
        //
        $datosservicio=request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $servicio = Servicios::findOrFail($id);
            Storage::delete('public/'.$servicio->Foto);
            $datosservicio['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Servicios::where('id','=',$id)->update($datosservicio);
        $servicio = Servicios::findOrFail($id);
        //return view('empleados.edit', compact('empleado')); 
        return redirect('servicios')->with('mensaje','Servicio Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $servicio = Servicios::findOrFail($id);
        if(Storage::delete('public/'.$servicio->Foto)){
            Servicios::destroy($id);
        }
        return redirect('servicios')->with('mensaje','Servicio Borrado');

        //Empleados::find($id)->delete();
        //return redirect('/empleados');
    }
}
