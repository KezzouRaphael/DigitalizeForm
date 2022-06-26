<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UPController extends Controller
{
    public function store()
    {
        //
        return redirect()->route('diagnostic');
    }
}
