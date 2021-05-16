<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [
              'name' => 'Admin',
              'email' => 'admin@admin.com',
              'password' => Hash::make('password'),
              'dark_mode' => true,
          ],
          [
              'name' => 'User',
              'email' => 'user@user.com',
              'password' => Hash::make('password'),
              'dark_mode' => true,
          ]
        ];
        foreach ($data as $item) {
            User::create($item);
        }
    }
}
