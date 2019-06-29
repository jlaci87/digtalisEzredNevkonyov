<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Soldier;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
