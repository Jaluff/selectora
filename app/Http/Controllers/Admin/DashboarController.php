<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboarController extends Controller
{
    public function index()
    {
    $users = User::all();
    return view('dashboard', compact('users'));
    }
}
