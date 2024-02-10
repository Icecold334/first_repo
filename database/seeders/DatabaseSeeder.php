<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();

        User::create(
            [
                'name' => 'Nur\'Aini Purwaningsih S.Ikom',
                'username' => 'aini',
                'email' => 'nurainip@gmail.com',
                'email_verified_at' => now(),
                'password' => 'ainicantik',
                'remember_token' => Str::random(10)
            ]
        );
        User::create(
            [
                'name' => 'Fauzan Imam S.Kom',
                'username' => 'fauzan',
                'email' => 'fauzanimam334@gmail.com',
                'email_verified_at' => now(),
                'password' => 'bojoneaini',
                'remember_token' => Str::random(10)
            ]
        );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
