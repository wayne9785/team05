<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use App\Models\Fleet;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Request;
use App\Http\Requests\CreateFleetRequest;

class FleetsController extends Controller
{
    public function store(CreateFleetRequest $request)
    {
        $name = $request->input('name');
        $country = $request->input('country');
        $location = $request->input('location');
       

        Fleet::create([
            'name' => $name,
            'country' => $country,
            'location' => $location,
            
        ]);

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
      return view('fleets.edit',['fleet'=>$fleet]);
    }
    public function update($id, CreateFleetRequest $request)    
    {
        $fleet = Fleet::findOrFail($id);



        $fleet->name = $request->input('name');
        $fleet->country = $request->input('country');
        $fleet->location = $request->input('location');
       
        $fleet->save();
        return redirect('teams');
    }    
}

