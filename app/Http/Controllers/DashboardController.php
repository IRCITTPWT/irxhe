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
    		'img' => 'image',
            'vid' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
    	]);

        if($request->hasFile('img')){
            $fileNameWithExtImg = $request->file('img')->getClientOriginalName();
            $filenameImg = pathinfo($fileNameWithExtImg, PATHINFO_FILENAME);
            $extImg = $request->file('img')->getClientOriginalExtension();
            $fileNameToStoreImg = $filenameImg.'_'.time().'.'.$extImg;
            $pathImg = $request->file('img')->storeAs('public/img', $fileNameToStoreImg);
        }else{
            $fileNameToStoreImg = '';
        }

        if ($request->hasFile('vid')) {
            $fileNameWithExtVid = $request->file('vid')->getClientOriginalName();
            $filenameVid = pathinfo($fileNameWithExtVid, PATHINFO_FILENAME);
            $extVid = $request->file('vid')->getClientOriginalExtension();
            $fileNameToStoreVid = $filenameVid.'_'.time().'.'.$extVid;
            $pathVid = $request->file('vid')->storeAs('public/vid', $fileNameToStoreVid);
    	}else{
            $fileNameToStoreVid = '';
    	}

        //untuk menentukan type broadcast
        if($fileNameToStoreVid){
            $type = 'vid';
        }else{
            $type = 'txt';
        }

		Broadcast::create([
			'idUser' => auth()->user()->id,
			'type' => $type,
			'tujuan' =>  request('tujuan'),
			'content' => request('content'),
			'img' => $fileNameToStoreImg,
			'vid' => $fileNameToStoreVid,
		]);

		return redirect()->back();
    }
}
