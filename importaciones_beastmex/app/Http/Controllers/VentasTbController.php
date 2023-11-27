<?php

namespace App\Http\Controllers;

use App\Models\VentasTb;
use Illuminate\Http\Request;

/**
 * Class VentasTbController
 * @package App\Http\Controllers
 */
class VentasTbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventasTbs = VentasTb::paginate();

        return view('ventas-tb.index', compact('ventasTbs'))
            ->with('i', (request()->input('page', 1) - 1) * $ventasTbs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventasTb = new VentasTb();
        return view('ventas-tb.create', compact('ventasTb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(VentasTb::$rules);

        $ventasTb = VentasTb::create($request->all());

        return redirect()->route('ventas-tbs.index')
            ->with('success', 'VentasTb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventasTb = VentasTb::find($id);

        return view('ventas-tb.show', compact('ventasTb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventasTb = VentasTb::find($id);

        return view('ventas-tb.edit', compact('ventasTb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  VentasTb $ventasTb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VentasTb $ventasTb)
    {
        request()->validate(VentasTb::$rules);

        $ventasTb->update($request->all());

        return redirect()->route('ventas-tbs.index')
            ->with('success', 'VentasTb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ventasTb = VentasTb::find($id)->delete();

        return redirect()->route('ventas-tbs.index')
            ->with('success', 'VentasTb deleted successfully');
    }
}
