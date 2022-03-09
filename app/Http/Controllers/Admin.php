<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function ordenes(){
        $ordenes = Order::paginate(10);

        return view('admin.ordenes.index', compact('ordenes'));
    }
}
