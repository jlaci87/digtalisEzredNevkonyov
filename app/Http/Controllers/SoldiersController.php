<?php

namespace App\Http\Controllers;

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
        return view('soldiers.index')
            ->with('soldiers', $soldiers);
    }

}
