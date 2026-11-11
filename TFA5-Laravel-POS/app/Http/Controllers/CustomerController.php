<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09181234567'],
            ['name' => 'Carlo Reyes', 'email' => 'carlo@example.com', 'phone' => '09191234567'],
            ['name' => 'Angela Cruz', 'email' => 'angela@example.com', 'phone' => '09201234567'],
            ['name' => 'Mark Flores', 'email' => 'mark@example.com', 'phone' => '09211234567'],
        ];

        return view('customers', compact('customers'));
    }
}