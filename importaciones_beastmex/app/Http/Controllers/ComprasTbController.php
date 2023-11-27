<?php

namespace App\Http\Controllers;

use App\Models\ComprasTb;
use Illuminate\Http\Request;

/**
 * Class ComprasTbController
 * @package App\Http\Controllers
 */
class ComprasTbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comprasTbs = ComprasTb::paginate();

        return view('compras-tb.index', compact('comprasTbs'))
            ->with('i', (request()->input('page', 1) - 1) * $comprasTbs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comprasTb = new ComprasTb();
        return view('compras-tb.create', compact('comprasTb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ComprasTb::$rules);

        $comprasTb = ComprasTb::create($request->all());

        return redirect()->route('compras-tb.index')
            ->with('success', 'ComprasTb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comprasTb = ComprasTb::find($id);

        return view('compras-tb.show', compact('comprasTb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comprasTb = ComprasTb::find($id);

        return view('compras-tb.edit', compact('comprasTb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ComprasTb $comprasTb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComprasTb $comprasTb)
    {
        request()->validate(ComprasTb::$rules);

        $comprasTb->update($request->all());

        return redirect()->route('compras-tb.index')
            ->with('success', 'ComprasTb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comprasTb = ComprasTb::find($id)->delete();

        return redirect()->route('compras-tbs.index')
            ->with('success', 'ComprasTb deleted successfully');
    }
}
