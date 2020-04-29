<?php

namespace App\Http\Controllers\Dashboard;

class Home extends BackEndController
{
    public function index()
    {
        return view('dashboard.home');
    }
}
