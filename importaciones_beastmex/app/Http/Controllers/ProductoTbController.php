<?php

namespace App\Http\Controllers;

use App\Models\ProductoTb;
use Illuminate\Http\Request;

/**
 * Class ProductoTbController
 * @package App\Http\Controllers
 */
class ProductoTbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productoTbs = ProductoTb::paginate();

        return view('producto-tb.index', compact('productoTbs'))
            ->with('i', (request()->input('page', 1) - 1) * $productoTbs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productoTb = new ProductoTb();
        return view('producto-tb.create', compact('productoTb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductoTb::$rules);

        $productoTb = ProductoTb::create($request->all());

        return redirect()->route('producto-tbs.index')
            ->with('success', 'ProductoTb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productoTb = ProductoTb::find($id);

        return view('producto-tb.show', compact('productoTb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productoTb = ProductoTb::find($id);

        return view('producto-tb.edit', compact('productoTb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductoTb $productoTb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoTb $productoTb)
    {
        request()->validate(ProductoTb::$rules);

        $productoTb->update($request->all());

        return redirect()->route('producto-tbs.index')
            ->with('success', 'ProductoTb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productoTb = ProductoTb::find($id)->delete();

        return redirect()->route('producto-tbs.index')
            ->with('success', 'ProductoTb deleted successfully');
    }
}
