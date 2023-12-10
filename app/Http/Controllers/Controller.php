<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class Controller
{
    public function homeView() : View
    {
        return view('home');
    }
}
