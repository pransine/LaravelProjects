<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = [
            [
                'id' => 1,
                'name' => 'Michaella Abegail',
                'email' => 'michaella@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'id' => 2,
                'name' => 'Sarah Dela Cruz',
                'email' => 'sarah@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'id' => 3,
                'name' => 'Emille Reyes',
                'email' => 'emille@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'id' => 4,
                'name' => 'Rich Brent',
                'email' => 'rich@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'id' => 5,
                'name' => 'Camille Parks',
                'email' => 'camille@gmail.com',
                'phone' => '09211234567'
            ],
        ];

        return view('customers', ['customers' => $customers]);
    }
}