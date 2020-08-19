<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /* Auth */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /* Auth */

    /* Dashboard */
    public function dashboard()
    {
        return view('area.dashboard');
    }
    /* Dashboard */

}
