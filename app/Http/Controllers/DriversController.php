<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
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
    
}
