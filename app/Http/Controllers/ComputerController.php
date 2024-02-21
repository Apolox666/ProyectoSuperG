<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computer = Computer::all();
        return view('equipos.index', compact('computer'));
    }

    public function import()
    {
        return view('equipos.import');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer = new Computer();


        $messages = [
            'required' => 'Este campo es obligatorio.',
            'computer_name.max' => 'El nombre del equipo introducido es muy largo',
            'user' => 'Este campo solo puede contener letras y espacios',
            'serial.max' => 'El serial ingresado es demsaido grande',
            'fixed_asset.numeric' => 'El activo fijo solo puede ser numerico.',
            'fixed_asset.max' => 'El activo fijo no pueder dser mayor a 5 digitos.',
            
            // Añade más mensajes según tus necesidades
        ];

        $validator = $request->validate([
            'computer_name' => ['required', 'max:25', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'user' => ['required', 'string'],
            'fixed_asset' => ['required', 'numeric', 'max:99999'],
            'serial' => ['required', 'string', 'regex:/^[a-zA-Z0-9\s]+$/', 'max:666666666'],
            'maintenance_date' => ['required'],
            'process' => ['required']
           
        ], $messages);



        try {

            $computer->name = $request->input('computer_name');
            $computer->user = $request->input('user');
            $computer->fixed_asset = $request->input('fixed_asset');
            $computer->serial = $request->input('serial');
            $computer->process = $request->input('process');
            $computer->maintenance_date = $request->input('maintenance_date');
            $computer->state = "Asignado";
            $computer->save();
            return (redirect(route('computer.index')));
           
        } catch (\Exception $e) {
            // Handle the exception if any unexpected error occurs
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('equipos.import');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $computer = Computer::findOrFail($id);

        $computer->delete();
        return $resulta = "ok";
    }
}
