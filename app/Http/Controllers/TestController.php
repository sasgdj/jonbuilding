<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\results;


class TestController extends Controller
{
    
    public function index(Request $request){
      // $request->user()->authorizeRoles(['user', 'admin']);
      return view('results');
    }

}
