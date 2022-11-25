<?php

namespace App\Http\Controllers;
use App\Models\Driver;
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
       $fleets = DB::table('fleets')
            ->select('fleets.id', 'fleets.name')
            ->orderBy('fleets.id', 'asc')
            ->get();
            
        $data = [];
        foreach ($fleets as $fleet)
        {
            $data[$fleet->id] = $fleet->name;
        }
        return view('drivers.create',['fleets' =>$data]);
    }
}
