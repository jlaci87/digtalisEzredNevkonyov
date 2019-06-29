<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Soldier;

class SoldiersController extends Controller
{
    
    public function index(Request $request)  
    {       
        $orderBy = $request->input('order_by');
        $dir = $request->input('direction');
        if($orderBy && $dir) {
            $soldiers = Soldier::orderBy($orderBy, $dir)->get();
        } else {
            $soldiers = Soldier::orderBy('last_name')->get();
        }
        return view('admin.soldiers.index')
            ->with('soldiers', $soldiers);
    }

    public function create()
    {
        return view('admin.soldiers.create');
    }

    public function store(Request $request)
    {
        $soldier = New Soldier;
        $soldier->prefix = $request->input('prefix');
        $soldier->last_name = $request->input('lastname');
        $soldier->first_name = $request->input('firstname');
        $soldier->group = $request->input('group');
        $soldier->save();
        
        return redirect()->route('soldiers.index', [
            'order_by' => $request->input('order_by'),
            'direction' => $request->input('diection')
        ]);
    }

    public function edit($soldierId)
    {
        $soldier = Soldier::where('id', '=', $soldierId)->first();
        
        return view('admin.soldiers.edit')
        ->with('soldier', $soldier);
    }

    public function update(Request $request, $soldierId) 
    {
        $soldier = Soldier::where('id', "=", $soldierId)->first();
        $soldier->prefix = $request->input('prefix');
        $soldier->last_name = $request->input('lastname');
        $soldier->first_name = $request->input('firstname');
        $soldier->group = $request->input('group');
        $soldier->save();

        return redirect()->route('soldiers.index', [
            'order_by' => $request->input('order_by'),
            'direction' => $request->input('diection')
        ]);
    }

    public function destroy($soldierId)
    {
        $soldier = Soldier::where('id', '=', $soldierId)->first();
        $soldier->delete();
        
        return redirect()->route('soldiers.index');
    }
}
