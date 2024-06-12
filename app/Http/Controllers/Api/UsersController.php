<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Index.
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Create.
     */
    public function create(Request $request)
    {
        // Validate the request...
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'email.unique' => 'Já existe um usuário com este e-mail.',
        ]);
 
        $user = new User;
 
        $user->create($validated);

        return response()->json($user);
    }

    /**
     * Read.
     */
    public function read(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update.
     */
    public function update(Request $request, User $user)
    {
        // Validate the request...
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'email.unique' => 'Já existe um usuário com este e-mail.',
        ]);
 
        $user->name = $request->name;
        $user->email = $request->email;
 
        $user->save();
 
        return response()->json($user);
    }

    /**
     * Delete.
     */
    public function delete(User $user)
    {
        $user->delete();
 
        return response()->json($user);
    }

    /**
     * Register.
     */
    public function register(Request $request)
    {
        // Validate the request...
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'email.unique' => 'Já existe um usuário com este e-mail.',
            'password.min' => 'A senha precisa ter no mínimo 8 dígitos.',
            'password.confirmed' => 'As senhas são diferentes.',
        ]);
 
        $user = new User;
 
        $user->create($validated);

        return response()->json($user);
    }

    /**
     * Login.
     */
    public function login(Request $request)
    {
        // Validate the request...
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'password.required' => 'O campo senha é obrigatório.',
        ]);

        $user = User::where('email', $request->email)
                    ->first();

        if (!$user) {
            abort(401, "Usuário não encontrado.");
        }

        if (!Hash::check($request->password, $user->password)) {
            abort(401, "Senha inválida.");
        }

        $token = $user->createToken('Token Name')->accessToken;

        return response()->json($token);
    }
}
