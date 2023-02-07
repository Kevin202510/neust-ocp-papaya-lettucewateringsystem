<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $carbondioxides=Carbondioxides::whereNull('deleted_at')
                                ->orderBy('id', 'DESC')->get();
        return response()->json($carbondioxides);
    }
}
