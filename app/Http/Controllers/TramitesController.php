<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramites;

class TramitesController extends Controller
{

    public function index()
    {
        $tramite = Tramites::all();
        return response()->json($tramite);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $tramite = new Tramites();
        $tramite->nombre = $request->nombre;
        $tramite->apellido_paterno = $request->apellido_paterno;
        $tramite->apellido_materno = $request->apellido_materno;
        $tramite->date_nacimiento = $request->date_nacimiento;
        $tramite->num_id = $request->num_id;
        $tramite->direccion = $request->direccion;
        $tramite->email = $request->email;
        $tramite->numero = $request->numero;
        $tramite->estado = $request->estado;
        $tramite->save();

        $data = [
            'message' =>'Tramite created successfully',
            'tramite' =>$tramite
        ];

        return response()->json($data);
    }


    public function show(Tramites $tramite)
    {
        return response()->json($tramite);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Tramites $tramite)
    {
        $tramite->nombre = $request->nombre;
        $tramite->apellido_paterno = $request->apellido_paterno;
        $tramite->apellido_materno = $request->apellido_materno;
        $tramite->date_nacimiento = $request->date_nacimiento;
        $tramite->num_id = $request->num_id;
        $tramite->direccion = $request->direccion;
        $tramite->email = $request->email;
        $tramite->numero = $request->numero;
        $tramite->estado = $request->estado;
        $tramite->save();
        $data = [
            'message' =>'Tramite updated successfully',
            'tramite' =>$tramite
        ];
        return response()->json($data);
    }


    public function destroy(Tramites $tramite)
    {
        $tramite->delete();
        $data = [
            'message' =>'Tramite deleted successfully',
            'tramite' =>$tramite
        ];
        return response()->json($data);
    }
}
