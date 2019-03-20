<?php

namespace App\Http\Controllers;

use App\Entidad;
use Illuminate\Http\Request;
use App\Sexo;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Entidad::with([
            'perfiles'
        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos = Sexo::all();
        // return view('welcome', ['sexos' => $sexos]);
        return view('welcome', compact('sexos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // el objeto request traer los datos del form
        $model = new Entidad();
        $model->entidad = $request['entidad'];
        $model->save();
        return redirect('entidades/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function show(Entidad $entidad)
    {
        return $entidad;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidad $entidad)
    {
        return view('editar', ['entidad' => $entidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidad $entidad)
    {
        $entidad->entidad = $request['entidad'];
        $entidad->save();
        return redirect('entidades/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidad $entidad)
    {
        $entidad->delete();
        return redirect('entidades/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('lista', ['rs' => $rs]);
    }
}
