<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
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
                'name' => 'Author',
                'email' => 'author@gmail.com',
                'password' => bcrypt(Str::random(16))
            ],
            [
                'name' => 'Artem',
                'email' => 'artem@artem.com',
                'password' => bcrypt('123123')
            ]
        ];

        DB::table('users')->insert($data);
    }
}
