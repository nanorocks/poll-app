<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{

	public function show(){
		return view('user.result');		
	}
}
