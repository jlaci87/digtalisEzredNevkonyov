<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soldier;

class SoldiersController extends Controller
{
    
    public function create()
    {
        return view('soldiers.create');
    }
    public function store(Request $request)
    {
        
        $soldier = New Soldier;
        $soldier->prefix = $request->input('prefix');
        $soldier->last_name = $request->input('lastname');
        $soldier->first_name = $request->input('firstname');
        $soldier->group = $request->input('group');
        $soldier->save();
        
        // dd($request);
        return redirect()->route('soldiers.index');
    }
    public function index()
    {
        $soldiers = Soldier::orderBy('last_name')->get();
        // dd($soldiers);
        return view('soldiers.index')
            ->with('soldiers', $soldiers);
    }
}
