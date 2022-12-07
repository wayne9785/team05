<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use App\Models\Fleet;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request;

class FleetsController extends Controller
{
    public function store()
    {
        $input = Request::all();
        Fleet::create($input);
        return redirect('fleets');       
    }
    public function index()
    {
        
        $fleets = Fleet::all();
        return view('fleets.index', ['fleets' => $fleets]);
       
    }
    public function show($id)
    {
        $fleets = Fleet::findOrFail($id);
        $drivers = $fleets->drivers;
        return view('fleets.show', ['fleets' => $fleets, 'drivers'=>$drivers]);
    }
    public function destroy($id)
    {
        $fleet = Fleet::findOrFail($id);
        $fleet->delete();
        return redirect('fleets');
    }
    public function create()
    {
        return view('fleets.create');
    }
    public function edit($id)
    {
      $fleet = Fleet::findOrFail($id);
      $tags = Driver::orderBy('drivers.id','asc')->pluck('drivers.name','drivers.id');
      $selectedTag = $fleet->tid;
      return view('fleets.edit',['fleet'=>$fleet, 'drivers' =>$tags, 'selectedNid'=>$selectedTag]);
    }
}

