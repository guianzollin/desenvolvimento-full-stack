<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Model (Eloquent ORM)
        $user = new User;
        $user->name = 'Guilherme';
        $user->email = 'guilherme.anzollin@unoesc.edu.br';
        $user->save();

        // DB Helper
        DB::table('users')->insert([
            'name' => 'Eduardo',
            'email' => 'eduardo.o@unoesc.edu.br',
        ]);
    }
}
