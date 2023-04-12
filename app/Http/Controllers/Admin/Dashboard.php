<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return view('dashboard');
    }
}
