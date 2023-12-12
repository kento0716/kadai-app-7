<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'oca',
            'email' => 'oca@email.com',
            'biography' => 'ocaのアカウントです',
            'password' => 'oca',
        ]);

        User::create([
            'name' => 'プログラマー名言bot',
            'email' => 'meigen@email.com',
            'biography' => 'プログラマーを名言投稿します',
            'password' => 'meigen',
        ]);

        User::create([
            'name' => 'ElonMusk',
            'email' => 'elonmusk@email.com',
            'biography' => 'Twitter, テスラ CEO',
            'password' => 'elonmusk',
        ]);
    }
}
