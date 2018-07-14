<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->truncate();
        App\Film::create([
        	'name' => 'Film 1',
        	'description' => 'The film is great',
        	'realease_date' => '2018-07-01',
        	'rating' => 3,
        	'ticket_price' => 1200,
        	'country' => 'US',
        	'genre'	=> 'Action',
        	'photo' => '1.jpg'
        ]);
        App\Film::create([
        	'name' => 'Film 2',
        	'description' => 'The film is best',
        	'realease_date' => '2018-07-11',
        	'rating' => 2,
        	'ticket_price' => 1210,
        	'country' => 'UK',
        	'genre'	=> 'Action',
        	'photo' => '2.jpg'
        ]);
        App\Film::create([
        	'name' => 'Film 3',
        	'description' => 'The film is the hottest in US',
        	'realease_date' => '2018-07-21',
        	'rating' => 1,
        	'ticket_price' => 2200,
        	'country' => 'US',
        	'genre'	=> 'Commedy',
        	'photo' => '3.jpg'
        ]);
    }
}
