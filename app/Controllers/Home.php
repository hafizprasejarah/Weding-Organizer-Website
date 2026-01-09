<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        return view('home', [
            'title' => 'home'
        ]);
    }

    public function service(): string
    {

        return view('service', [
            'title' => 'services'
        ]);
    }
}
