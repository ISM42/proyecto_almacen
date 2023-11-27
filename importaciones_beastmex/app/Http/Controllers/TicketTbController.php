<?php

namespace App\Http\Controllers;

use App\Models\TicketTb;
use Illuminate\Http\Request;

/**
 * Class TicketTbController
 * @package App\Http\Controllers
 */
class TicketTbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticketTbs = TicketTb::paginate();

        return view('ticket-tb.index', compact('ticketTbs'))
            ->with('i', (request()->input('page', 1) - 1) * $ticketTbs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticketTb = new TicketTb();
        return view('ticket-tb.create', compact('ticketTb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TicketTb::$rules);

        $ticketTb = TicketTb::create($request->all());

        return redirect()->route('ticket-tbs.index')
            ->with('success', 'TicketTb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticketTb = TicketTb::find($id);

        return view('ticket-tb.show', compact('ticketTb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticketTb = TicketTb::find($id);

        return view('ticket-tb.edit', compact('ticketTb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TicketTb $ticketTb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketTb $ticketTb)
    {
        request()->validate(TicketTb::$rules);

        $ticketTb->update($request->all());

        return redirect()->route('ticket-tbs.index')
            ->with('success', 'TicketTb updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ticketTb = TicketTb::find($id)->delete();

        return redirect()->route('ticket-tbs.index')
            ->with('success', 'TicketTb deleted successfully');
    }
}
