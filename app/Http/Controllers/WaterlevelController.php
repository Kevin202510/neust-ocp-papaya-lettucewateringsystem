<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Waterlevels;

class WaterlevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waterlevels=Waterlevels::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->get();
        return response()->json($waterlevels);
    }

    public function index2()
    {
        $waterlevels=Waterlevels::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->limit(10)->get();
        return response()->json($waterlevels);
    }

    public function export(Request $request)
    {
        $waterlevels=Waterlevels::whereBetween('created_at',[$request->datef,$request->datet])->get();
        $temperaturedata = PDF::loadView('waterlevels.exportTemperature',compact('waterlevels'));
        return $temperaturedata->download('waterlevels-data.pdf');
    }
}
