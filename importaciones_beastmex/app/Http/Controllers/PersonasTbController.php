<?php

namespace App\Http\Controllers;

use App\Models\PersonasTb;
use Illuminate\Http\Request;
use App\Models\User;

/**
 * Class PersonasTbController
 * @package App\Http\Controllers
 */
class PersonasTbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personasTbs = PersonasTb::paginate();

        return view('personas-tb.index', compact('personasTbs'))
            ->with('i', (request()->input('page', 1) - 1) * $personasTbs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personasTb = new PersonasTb();
        //$proveedorTb = new ProveedorTb();
       // $personas_tb = PersonasTb::pluck('nombre', 'id');
       // return view('proveedor-tb.create', compact('proveedorTb', 'personas_tb'));
        return view('personas-tb.create', compact('personasTb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PersonasTb::$rules);

        $personasTb = PersonasTb::create($request->all());

        return redirect()->route('personas-tb.index')
            ->with('success', 'PersonasTb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personasTb = PersonasTb::find($id);

        return view('personas-tb.show', compact('personasTb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personasTb = PersonasTb::find($id);

        return view('personas-tb.edit', compact('personasTb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PersonasTb $personasTb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonasTb $personasTb)
    {
        request()->validate(PersonasTb::$rules);

        $personasTb->update($request->all());

        return redirect()->route('personas-tb.index')
            ->with('success', 'PersonasTb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personasTb = PersonasTb::find($id)->delete();

        return redirect()->route('personas-tb.index')
            ->with('success', 'PersonasTb deleted successfully');
    }
}
