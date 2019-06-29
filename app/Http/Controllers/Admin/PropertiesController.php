<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Prefix;

class PropertiesController extends Controller
{
    public function index()
    {
        // $prefixes = Prefix::orderBy('name')->get();
        return view('admin.properties.index')
            // ->with('prefixes', $prefixes)
            ;
    }
    // public function storePrefix(Request $request)
    // {
    //     $prefix = New Prefix;
    //     $prefix->name = $request->input('name');
    //     $prefix->save();

    //     return redirect()->route('admin.properties.index');
    // }
}