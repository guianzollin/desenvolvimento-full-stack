<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
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

    /**
     * Store a new user in the database.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
 
        $user->save();
 
        return redirect('/users');
    }

    /**
     * Update.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        // Validate the request...
 
        $user->name = $request->name;
        $user->email = $request->email;
 
        $user->save();
 
        return redirect('/users');
    }

    /**
     * Delete.
     */
    public function delete(User $user): RedirectResponse
    {
        // Validate the request...
 
        $user->delete();
 
        return redirect('/users');
    }
}
