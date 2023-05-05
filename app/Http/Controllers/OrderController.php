<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Ticket $ticket)
    {
        $ticket = Ticket::find($ticket->id);
        return view('order', [
            'ticket' => $ticket
        ]);
    }

    public function store(Request $request, Ticket $ticket)
    {
        $ticket = Ticket::find($ticket->id);
        $validatedData = $request->validate([
            'qty' => 'required',
            'amount' => 'required'
        ]);

        $order = Order::create([
            'ticket_id' => $ticket->id,
            'user_id' => Auth::id(),
            'qty' => $validatedData['qty'],
            'amount' => $validatedData['amount']
        ]);

        return redirect('/ordered');
    }

}