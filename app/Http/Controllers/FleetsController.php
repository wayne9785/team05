<?php

namespace App\Http\Controllers;

use App\Models\Fleet;
use Illuminate\Http\Request;

class FleetsController extends Controller
{
    public function index()
    {
        
        $fleets = Fleet::all();
        return view('fleets.index', ['fleets' => $fleets]);
       
    }
}

