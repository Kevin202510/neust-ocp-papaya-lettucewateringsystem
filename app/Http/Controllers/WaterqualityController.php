<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Waterqualities;

class WaterqualityController extends Controller
{
    public function index()
    {
        $waterqualities=Waterqualities::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->get();
        return response()->json($waterqualities);
    }

    public function index2()
    {
        $waterqualities=Waterqualities::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->limit(10)->get();
        return response()->json($waterqualities);
    }

    public function export(Request $request)
    {
        $waterqualities=Waterqualities::whereBetween('created_at',[$request->datef,$request->datet])->get();
        $temperaturedata = PDF::loadView('waterqualities.exportTemperature',compact('waterqualities'));
        return $temperaturedata->download('waterqualities-data.pdf');
    }
}
