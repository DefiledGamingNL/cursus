<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Danny Heijnen',
            'email' => 'dannyheijnen1991@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('HalloDikkieDik#lar123'),
            'remember_token' => Str::random(10),
        ])->assignRole('admin')->givePermissionTo('view admin');
    }
}
