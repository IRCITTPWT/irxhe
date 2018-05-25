<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Broadcast;

class ClientController extends Controller
{
    public function show()
    {
    	// $datas = Broadcast::where('cabang', $cabang)->latest()->get();
    	$datas = Broadcast::all();
    	return view('client/client', compact('datas'));
    }
}
