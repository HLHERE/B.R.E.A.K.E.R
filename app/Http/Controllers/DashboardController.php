<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{



    public function index()
    {
        $tombolback = true;
        return view('dashboard.index', [
            'totaluser' => User::all()->count(),
            'tombolback' => $tombolback
        ]);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
