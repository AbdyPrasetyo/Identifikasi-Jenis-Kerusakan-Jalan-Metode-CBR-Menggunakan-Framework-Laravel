<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'     => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'level'    => 1,
                'email'    => 'admin@admin.com',
            ],
            [
                'name'     => 'User',
                'username' => 'user',
                'password' => bcrypt('user123'),
                'level'    => 2,
                'email'    => 'user@user.com',
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
