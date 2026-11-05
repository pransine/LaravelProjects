<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Francine Agalabia',
                'email' => 'agalabia.f@gmail.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'name' => 'Mercy Evangelista',
                'email' => 'evangelista.m@gmail.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 3,
                'name' => 'Chloe Chan',
                'email' => 'chan.c@gmail.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 4,
                'name' => 'Jazmine Elly',
                'email' => 'elly.j@gmail.com',
                'role' => 'Manager'
            ],
            [
                'id' => 5,
                'name' => 'Beata Maxine',
                'email' => 'maxine.b@gmail.com',
                'role' => 'Staff'
            ],
        ];

        return view('users', ['users' => $users]);
    }
}