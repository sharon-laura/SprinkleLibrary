<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin SprinkleBook',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ]
        ];

        User::insert($users);
    }
}
