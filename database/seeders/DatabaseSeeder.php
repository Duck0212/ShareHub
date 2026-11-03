<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */


        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Tìm kiếm theo email
            [
                'name' => 'Admin',
                'password' => bcrypt('Admin123'),
                'username' => 'admin',
                'bio' => 'Nhiếp ảnh gia tự do',
            ]
        );

        User::updateOrCreate(
            ['email' => 'user@gmail.com'], // Tìm kiếm theo email
            [
                'name' => 'User',
                'password' => bcrypt('User123'),
                'username' => 'user',
                'bio' => 'Nhiếp ảnh gia tự do',
            ]
        );
    }
}
