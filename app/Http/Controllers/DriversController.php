<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use App\Models\Fleet;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request;

class DriversController extends Controller
{
    public function store()
    {
        $input = Request::all();
        Driver::create($input);
        return redirect('drivers');       
    }
    public function index()
    {
        
        $drivers = Driver::all();
        return view('drivers.index', ['drivers' => $drivers]);
       
    }
    public function show($id)
    {
        $driver = Driver::findOrFail($id);
        return view('drivers.show', ['driver' => $driver]);
    }
    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return redirect('drivers');
    }
    public function create()
    {
       $tags = Fleet::orderBy('fleets.id', 'asc')->pluck('fleets.name','fleets.id');
       return view('drivers.create',['fleets'=>$tags]);
    }
    public function edit($id)
    {
      $driver = Driver::findOrFail($id);
      $tags = Fleet::orderBy('fleets.id','asc')->pluck('fleets.name','fleets.id');
      $selectedTag = $driver->tid;
      return view('drivers.edit',['driver'=>$driver, 'fleets' =>$tags, 'selectedTid'=>$selectedTag]);
    }

    public function update($id)
    {
        $driver = Driver::findOrFail($id);
        
    }
}
