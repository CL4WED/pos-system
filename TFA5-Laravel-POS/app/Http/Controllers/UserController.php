<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'Admin User', 'username' => 'admin', 'role' => 'Administrator'],
            ['name' => 'Andrea Garcia', 'username' => 'andrea', 'role' => 'Cashier'],
            ['name' => 'John Ramos', 'username' => 'john', 'role' => 'Staff'],
            ['name' => 'Paolo Mendoza', 'username' => 'paolo', 'role' => 'Manager'],
            ['name' => 'Karen Diaz', 'username' => 'karen', 'role' => 'Staff'],
        ];

        return view('users', compact('users'));
    }
}