<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
      public function uploadForm()
    {
        return view('layouts.test');
    }
 
    public function uploadSubmit(Request $request)
    {
        // Coming soon...
        print_r($request->file('photos')->getClientOriginalName());exit;
    }
}
