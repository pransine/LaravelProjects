<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        // Sample Customers
        Customer::create([
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan@gmail.com',
            'phone' => '09171234567'
        ]);

        Customer::create([
            'full_name' => 'Maria Santos',
            'email' => 'maria@gmail.com',
            'phone' => '09181234567'
        ]);

        Customer::create([
            'full_name' => 'Pedro Reyes',
            'email' => 'pedro@gmail.com',
            'phone' => '09191234567'
        ]);

        Customer::create([
            'full_name' => 'Ana Garcia',
            'email' => 'ana@gmail.com',
            'phone' => '09201234567'
        ]);

        Customer::create([
            'full_name' => 'Mark Lopez',
            'email' => 'mark@gmail.com',
            'phone' => '09211234567'
        ]);

        // Sample Users
        User::create([
            'username' => 'admin',
            'full_name' => 'Admin User'
        ]);

        User::create([
            'username' => 'cashier1',
            'full_name' => 'Cashier One'
        ]);

        User::create([
            'username' => 'cashier2',
            'full_name' => 'Cashier Two'
        ]);

        User::create([
            'username' => 'manager',
            'full_name' => 'Manager User'
        ]);

        User::create([
            'username' => 'staff',
            'full_name' => 'Staff User'
        ]);
    }
}