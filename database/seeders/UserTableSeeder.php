<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'              => 'مؤسس النظام',
            'email'             => 'admin@gmail.com',
            'phone'             => '9661236547',
'device_id'=>'0',
            'password'          => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $admin->assignRole('admin');
    }
}
