<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class volunteerController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
