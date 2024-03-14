<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    
    public function __constructor()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('specialties.index');
    }
    
}
