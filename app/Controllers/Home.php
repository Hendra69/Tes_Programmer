<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login dan Register'
        ];

        return view('home', $data);
    }
}
