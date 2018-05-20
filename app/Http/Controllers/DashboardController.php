<?php

namespace App\Http\Controllers;
use App\Broadcast;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
    	$datas = Broadcast::all();
    	return view('dashboard/dashboard', compact('datas'));
    }
    public function store()
    {
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
