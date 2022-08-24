<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=100; $i++) { 
            $post_id = rand(1,15);
            $user_id = rand(1,3);
            DB::table('comments')->insert([
                'post_id' => $post_id,
                'my_comment' => "This is Test Comment ".$i
            ]);
        }
    }
}
