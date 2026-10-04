<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        helper('url');

        // Temporary in-memory records for this activity; no database is used.
        $customers = [
            ['name' => 'Mia Santos', 'email' => 'mia.santos@example.com', 'phone' => '+63 917 555 0101'],
            ['name' => 'Liam Reyes', 'email' => 'liam.reyes@example.com', 'phone' => '+63 918 555 0102'],
            ['name' => 'Ava Cruz', 'email' => 'ava.cruz@example.com', 'phone' => '+63 919 555 0103'],
            ['name' => 'Noah Garcia', 'email' => 'noah.garcia@example.com', 'phone' => '+63 920 555 0104'],
            ['name' => 'Isla Mendoza', 'email' => 'isla.mendoza@example.com', 'phone' => '+63 921 555 0105'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customers,
        ]);
    }
}
