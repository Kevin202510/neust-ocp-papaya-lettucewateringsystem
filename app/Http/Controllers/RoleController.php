<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Roles::whereNull('deleted_at')->get();
        return response()->json($roles);
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $roles=Roles::create($input); 
        return response()->json($roles);
    }

    public function update(Request $request, Roles $roles)
    {
        $input = $request->all();
        $roles->update($input);
        return response()->json($roles, 200);
    }

    public function destroy(Roles $roles)
    {
        $roles->deleted_at = Carbon::now();
        $roles->update();
        return response()->json(array('success'=>true));
    }
}
