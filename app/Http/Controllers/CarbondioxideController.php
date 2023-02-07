<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Carbondioxides;

class CarbondioxideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbondioxides=Carbondioxides::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->get();
        return response()->json($carbondioxides);
    }

    public function index2()
    {
        $carbondioxides=Carbondioxides::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->limit(10)->get();
        return response()->json($carbondioxides);
    }

    public function export(Request $request)
    {
        $carbondioxides=Carbondioxides::whereBetween('created_at',[$request->datef,$request->datet])->get();
        $temperaturedata = PDF::loadView('carbondioxides.exportTemperature',compact('carbondioxides'));
        return $temperaturedata->download('carbondioxides-data.pdf');
    }
}
