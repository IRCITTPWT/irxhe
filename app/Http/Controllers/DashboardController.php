<?php

namespace App\Http\Controllers;
use App\Broadcast;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show()
    {
    	$datas = Broadcast::latest()->get();
    	return view('dashboard/dashboard', compact('datas'));
    }
    public function store()
    {
    	// if($request->hasFile())
		Broadcast::create([
			'idUser' => '1',
			'type' => 'txt',
			'tujuan' => request('tujuan'),
			'content' => request('content'),
			'img' => '',
			'vid' => '',
		]);

		return redirect()->back();
    }
}
