<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            ['name' => 'Juan Dela Cruz', 'email' => 'juan@email.com', 'phone' => '09171234567'],
            ['name' => 'Maria Santos', 'email' => 'maria@email.com', 'phone' => '09181234567'],
            ['name' => 'Carlo Reyes', 'email' => 'carlo@email.com', 'phone' => '09191234567'],
            ['name' => 'Angela Cruz', 'email' => 'angela@email.com', 'phone' => '09201234567'],
            ['name' => 'Mark Garcia', 'email' => 'mark@email.com', 'phone' => '09211234567'],
        ];

        return view('customers', $data);
    }
}