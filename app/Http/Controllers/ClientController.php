<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show()
    {
    	return view('client/client');
    }
}
