<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class PageController extends Controller
{
    public function home()
    {
        return view('templates/home');
    }

    public function register()
    {
        return view('templates/auth/register');
    }

    public function characters()
    {
        return view('templates/characters');
    }

}
