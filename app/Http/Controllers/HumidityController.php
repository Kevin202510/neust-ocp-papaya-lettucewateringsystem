<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Humidities;

class HumidityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humidities=Humidities::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->get();
        return response()->json($humidities);
    }

    public function index2()
    {
        $humidities=Humidities::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->limit(10)->get();
        return response()->json($humidities);
    }

    public function export(Request $request)
    {
        $humidities=Humidities::whereBetween('created_at',[$request->datef,$request->datet])->get();
        $temperaturedata = PDF::loadView('humidities.exportTemperature',compact('humidities'));
        return $temperaturedata->download('humidities-data.pdf');
    }
}
