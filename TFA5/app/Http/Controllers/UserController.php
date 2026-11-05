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
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'role' => 'Administrator'
            ],
            [
                'id' => 2,
                'name' => 'Cashier One',
                'email' => 'cashier1@gmail.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 3,
                'name' => 'Cashier Two',
                'email' => 'cashier2@gmail.com',
                'role' => 'Cashier'
            ],
            [
                'id' => 4,
                'name' => 'Manager User',
                'email' => 'manager@gmail.com',
                'role' => 'Manager'
            ],
            [
                'id' => 5,
                'name' => 'Staff User',
                'email' => 'staff@gmail.com',
                'role' => 'Staff'
            ],
        ];

        return view('users', ['users' => $users]);
    }
}