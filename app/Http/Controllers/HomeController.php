<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
$users_form_controller = [
    [
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'age' => 28,
        'is_active' => true,
    ],
    [
        'id' => 2,
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'age' => 32,
        'is_active' => false,
    ],
    [
        'id' => 3,
        'name' => 'Mike Johnson',
        'email' => 'mike@example.com',
        'age' => 24,
        'is_active' => true,
    ],
];
        return view('home', compact('users_form_controller'));
    }
}
