<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();
        App\Comment::create([
        	'user_id' => '1',
        	'film_id' => '1',
        	'comment' => 'The film is great',
        ]);
        App\Comment::create([
        	'user_id' => '2',
        	'film_id' => '2',
        	'comment' => 'Great',
        ]);
        App\Comment::create([
        	'user_id' => '1',
        	'film_id' => '3',
        	'comment' => 'Good',
        ]);
    }
}
