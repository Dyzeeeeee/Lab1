<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        return view('act');
    }
    public function index(): string
    {
        return view('activity');
    }
}
