<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Index.
     */
    public function index(string $name): View
    {
        return view('user.index', [
            'name' => $name
        ]);
    }
}
