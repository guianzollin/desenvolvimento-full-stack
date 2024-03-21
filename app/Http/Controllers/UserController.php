<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Index.
     */
    public function index(): View
    {
        $users = User::all();

        return view('user.index', [
            'users' => $users
        ]);
    }

    /**
     * Details.
     */
    public function details(User $user): View
    {
        return view('user.details', [
            'user' => $user
        ]);
    }

    /**
     * Create.
     */
    public function create(): View
    {
        return view('user.create');
    }
}
