<?php

namespace App\Http\Controllers;

use App\Models\ProveedorTb;
use Illuminate\Http\Request;

/**
 * Class ProveedorTbController
 * @package App\Http\Controllers
 */
class ProveedorTbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedorTbs = ProveedorTb::paginate();

        return view('proveedor-tb.index', compact('proveedorTbs'))
            ->with('i', (request()->input('page', 1) - 1) * $proveedorTbs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedorTb = new ProveedorTb();
        return view('proveedor-tb.create', compact('proveedorTb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProveedorTb::$rules);

        $proveedorTb = ProveedorTb::create($request->all());

        return redirect()->route('proveedor-tbs.index')
            ->with('success', 'ProveedorTb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedorTb = ProveedorTb::find($id);

        return view('proveedor-tb.show', compact('proveedorTb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedorTb = ProveedorTb::find($id);

        return view('proveedor-tb.edit', compact('proveedorTb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProveedorTb $proveedorTb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProveedorTb $proveedorTb)
    {
        request()->validate(ProveedorTb::$rules);

        $proveedorTb->update($request->all());

        return redirect()->route('proveedor-tbs.index')
            ->with('success', 'ProveedorTb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proveedorTb = ProveedorTb::find($id)->delete();

        return redirect()->route('proveedor-tbs.index')
            ->with('success', 'ProveedorTb deleted successfully');
    }
}
