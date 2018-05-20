<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Broadcast;

class ClientController extends Controller
{
    public function show()
    {
    	$datas = Broadcast::latest()->get();
    	return view('client/client', compact('datas'));
    }
}
