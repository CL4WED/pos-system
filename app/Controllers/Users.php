<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            ['username' => 'admin', 'name' => 'Claude Ebnol', 'role' => 'Administrator'],
            ['username' => 'cashier1', 'name' => 'Maria Santos', 'role' => 'Cashier'],
            ['username' => 'staff1', 'name' => 'Carlo Reyes', 'role' => 'Staff'],
            ['username' => 'manager1', 'name' => 'Angela Cruz', 'role' => 'Manager'],
            ['username' => 'staff2', 'name' => 'Mark Garcia', 'role' => 'Staff'],
        ];

        return view('users', $data);
    }
}