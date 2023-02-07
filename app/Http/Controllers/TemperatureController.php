<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Temperatures;

class TemperatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temperatures=Temperatures::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->get();
        return response()->json($temperatures);
    }

    public function index2()
    {
        $temperatures=Temperatures::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->limit(10)->get();
        return response()->json($temperatures);
    }

    public function export(Request $request)
    {
        $temperatures=Temperatures::whereBetween('created_at',[$request->datef,$request->datet])->get();
        $temperaturedata = PDF::loadView('temperatures.exportTemperature',compact('temperatures'));
        return $temperaturedata->download('temperatures-data.pdf');
    }
}
