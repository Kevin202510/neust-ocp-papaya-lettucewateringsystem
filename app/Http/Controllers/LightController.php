<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Lights;

class LightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lights=Lights::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->get();
        return response()->json($lights);
    }

    public function index2()
    {
        $lights=Lights::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->limit(10)->get();
        return response()->json($lights);
    }

    public function export(Request $request)
    {
        $lights=Lights::whereBetween('created_at',[$request->datef,$request->datet])->get();
        $temperaturedata = PDF::loadView('lights.exportTemperature',compact('lights'));
        return $temperaturedata->download('lights-data.pdf');
    }
}
