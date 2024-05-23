<?php

namespace Database\Seeders;

use App\Models\TeamWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamWork::insert([
            [
                'name'  => 'م.محمد أحمد',
                'role'  => 'Flutter Developer',
                'image' => 'teamwork/user.png'
            ],
        ]);
    }
}
