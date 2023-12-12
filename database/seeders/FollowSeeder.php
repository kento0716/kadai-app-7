<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Follow;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Follow::create([
            'user' => '1',
            'follow_user' => '2',
        ]);
        Follow::create([
            'user' => '1',
            'follow_user' => '3',
        ]);
        Follow::create([
            'user' => '2',
            'follow_user' => '3',
        ]);
    }
}
