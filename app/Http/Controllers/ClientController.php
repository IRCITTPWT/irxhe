<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Broadcast;

class ClientController extends Controller
{
    public function show()
    {
    	$user = \App\User::where('id', auth()->user()->id)->first();
    	$datas = Broadcast::where('tujuan', $user->cabang)->latest()->get();
    	$alls = Broadcast::where('tujuan', 'all')->latest()->get();
    	return view('client/client', compact('datas', 'alls'));
    }
}
