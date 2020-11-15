<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::latest()->get();

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::create([
            'name' => request('name'),
            'created_at' => request('created_at'),
            'priority' => request('priority'),
            'subject' => request('subject'),
            'content' => request('content'),
            'employee' => request('employee'),
            'closed' => request('closed'),
        ]);

        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.read', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'name' => 'required',
            'created_at' => 'required',
            'priority' => 'required',
            'subject' => 'required',
            'content' => 'required',
            'employee' => 'required',
            'closed' => 'required'
        ]);

        $ticket->name = request('name');
        $ticket->created_at = request('created_at');
        $ticket->priority = request('priority');
        $ticket->subject = request('subject');
        $ticket->content = request('content');
        $ticket->employee = request('employee');
        $ticket->closed = request('closed');
        $ticket->save();
        

        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
