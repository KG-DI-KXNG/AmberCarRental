<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function rentals(): View
    {
        return view('home.rentals');
    }

    public function plans()
    {
        return;
    }

    public function contact()
    {
        return;
    }
}
