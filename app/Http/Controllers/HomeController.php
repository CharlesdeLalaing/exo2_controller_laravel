<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $users = (object)['ID' => '1', 'nom' => 'Charles', 'age' => 22, 'email' => 'Charles.delalaing@gmail.com'];
        return view('pages/users', compact('users'));
    }
}
