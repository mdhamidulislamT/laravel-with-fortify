<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=15; $i++) {
            DB::table('posts')->insert([
                'my_post' => "This is Test Post - ".$i,
                'user_id' => rand(1,3),
            ]);
        }
    }
}
