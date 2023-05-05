<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderedController extends Controller
{
    public function index()
    {
        return view('ordered', [
            'order' => Order::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function show(Order $order)
    {
        return view('detail', [
            'order' => $order
        ]);
    }

    public function destroy()
    {

    }
}