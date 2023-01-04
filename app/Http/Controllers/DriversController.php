<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use App\Models\Fleet;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateDriverRequest;

class DriversController extends Controller
{
    public function store(CreateDriverRequest $request)
    {
        $name = $request->input('name');
        $tid = $request->input('tid');
        $number = $request->input('number');
        $frequency = $request->input('frequency');
        $integal = $request->input('integal');
        $birthday = $request->input('birthday');
        $countryofbirth = $request->input('countryofbirth');

        $driver = Driver::create([
            'name'=>$name,
            'tid'=>$tid,
            'number'=>$number,
            'frequency'=>$frequency,
            'integal'=>$integal,
            'birthday'=>$birthday,
            'countryofbirth'=>$countryofbirth]);
        return redirect('drivers');       
    }
    public function countryofbirth(Request $request)
    {
        $drivers = Driver::countryofbirth($request->input('pos'))->paginate(25); //->get();
        $countryofbirths = Driver::allCountryofbirths()->pluck('drivers.countryofbirth', 'drivers.countryofbirth');
        return view('drivers.index', ['drivers' => $drivers, 'countryofbirths'=>$countryofbirths, 'showPagination'=>true]);
    }
    
    public function index()
    {
        
        $drivers = Driver::paginate(15);
        $countryofbirths = Driver::allCountryofbirths()->pluck('drivers.countryofbirth', 'drivers.countryofbirth');
        return view('drivers.index', ['drivers' => $drivers, 'countryofbirths'=>$countryofbirths, 'showPagination'=>true]);
       
    }
    
    public function api_drivers()
    {
        return Driver::all();
    }


    public function api_update(Request $request)
    {
        $driver = Driver::find($request->input('id'));
        if ($driver == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }
        $driver->name = $request->input('name');
        $driver->tid = $request->input('tid');
        $driver->number = $request->input('number');
        $driver->frequency = $request->input('frequency');
        $driver->integral = $request->input('integral');
        $driver->birthday = $request->input('birthday');
        $driver->countryofbirth = $request->input('countryofbirth');

        if ($driver->save())
        {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $driver = driver::find($request->input('id'));

        if ($driver == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($driver->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
    public function senior()
    {
        
        $drivers = Driver::senior()->get();
        $countryofbirths = Driver::allCountryofbirths()->pluck('drivers.countryofbirth', 'drivers.countryofbirth');
        return view('drivers.index', ['drivers' => $drivers, 'countryofbirths'=>$countryofbirths, 'showPagination'=>false]);
       
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

    public function update($id, CreateDriverRequest $request)
    {
        $driver = Driver::findOrFail($id);
        
        

        $driver->name = $request->input('name');
        $driver->tid = $request->input('tid');
        $driver->number = $request->input('number');
        $driver->frequency = $request->input('frequency');
        $driver->integal = $request->input('integal');
        $driver->birthday = $request->input('birthday');
        $driver->countryofbirth =$request->input('countryofbirth');
        $driver->save();

        return redirect('players');
    }
}
