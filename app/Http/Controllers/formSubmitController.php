<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;

class formSubmitController extends Controller
{
    //
    public function submit(Request $request){

        data::create($request->all());
        return view('thank');
    }

}
