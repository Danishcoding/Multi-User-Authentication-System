<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Danish';
        $user->email = 'danish@gmail.com';
        $user->email_verified_at = null;   // explicitly null
        $user->password = Hash::make('12345678');
        $user->remember_token = null;      // explicitly null
        $user->created_at = now();         // or null if you want
        $user->updated_at = null;          // explicitly null
        $user->save();
    }
}
