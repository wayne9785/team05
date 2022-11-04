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
    public function show($id)
    {
        $fleets = Fleet::findOrFail($id);
        return view('fleets.show', ['fleets' => $fleets]);
    }
    public function destroy($id)
    {
        $fleet = Fleet::findOrFail($id);
        $fleet->delete();
        return redirect('fleets');
    }
}

