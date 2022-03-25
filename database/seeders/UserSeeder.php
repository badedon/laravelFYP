<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'nishan@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('admin12345'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}