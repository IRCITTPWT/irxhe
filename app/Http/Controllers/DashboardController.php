<?php

namespace App\Http\Controllers;
use App\Broadcast;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        $data = User::where('id', auth()->user()->id)->first();
        if(User::isAdmin(\Auth::user()->id) == false){
            return redirect()->route('client');
        }else{
        	$datas = Broadcast::latest()->get();
        	return view('dashboard/dashboard', compact('datas'));
        }
    }
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'img' => 'image'
    	]);

    	if($request->hasFile('img')){
    		$fileNameWithExt = $request->file('img')->getClientOriginalName();
    		$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    		$ext = $request->file('img')->getClientOriginalExtension();
    		$fileNameToStore = $filename.'_'.time().'.'.$ext;
    		$path = $request->file('img')->storeAs('public/img', $fileNameToStore);
    	}else{
    		$fileNameToStore = '';
    	}
		Broadcast::create([
			'idUser' => '1',
			'type' => 'txt',
			'tujuan' =>  request('tujuan'),
			'content' => request('content'),
			'img' => $fileNameToStore,
			'vid' => '',
		]);

		return redirect()->back();
    }
}
