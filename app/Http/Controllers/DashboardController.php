<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Alex',
                'age' => 25,
            ],
            [
                'name' => 'Dan',
                'age' => 5,
            ],
            [
                'name' => 'John',
                'age' => 17,
            ],
        ];

        return view('dashboard', ['users' => $users]);
    }
}
