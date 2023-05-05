<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use App\Models\Order;

class ReportController extends Controller
{
    public function index() {
        
        return view('report', [
            'order' => Order::where('user_id', auth()->user()->id)->get(),
            'user' => User::all(),
        ]);
    }
}