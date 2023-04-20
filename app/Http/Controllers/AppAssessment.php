<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppAssessment extends Controller
{
    public function index(){
        return view('assessment');
    }
}
