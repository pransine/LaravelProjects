<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = Customer::all();

        return view('customers', ['customers' => $customers]);
    }

    public function create(): View
    {
        return view('customers.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        Customer::create($validated);

        return redirect()->route('customers')
            ->with('success', 'Customer added successfully!');
    }

    public function edit($id): View
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($validated);

        return redirect()->route('customers')
            ->with('success', 'Customer updated successfully!');
    }
}