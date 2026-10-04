<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        helper('url');

        // Temporary in-memory records for this activity; no database is used.
        $users = [
            ['username' => 'jdelacruz', 'name' => 'Jordan Dela Cruz', 'role' => 'Administrator'],
            ['username' => 'srivera', 'name' => 'Sam Rivera', 'role' => 'Cashier'],
            ['username' => 'tlim', 'name' => 'Taylor Lim', 'role' => 'Cashier'],
            ['username' => 'mcastro', 'name' => 'Morgan Castro', 'role' => 'Inventory Clerk'],
            ['username' => 'acortez', 'name' => 'Alex Cortez', 'role' => 'Manager'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ]);
    }
}
