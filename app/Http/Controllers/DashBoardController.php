<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashBoardController extends Controller
{
    //
    public function index(): View
    {
        $user = Auth::user();
        $tasks = $user->tasks;
        return view('dashboard', compact('tasks'));
    }
}
