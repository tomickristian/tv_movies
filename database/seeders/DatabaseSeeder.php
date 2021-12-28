<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $channels = [
            ['channel_name' => 'NovaTv'],
            ['channel_name' => 'RTL']
        ];
        DB::table('channels')->insert($channels);

        $languages = [
            ['language_name' => 'Hrvatski'],
            ['language_name' => 'Engleski'],
            ['language_name' => 'Španjolski']
        ];
        DB::table('languages')->insert($languages);

        $genres = [
            ['genre_name' => 'Akcijski'],
            ['genre_name' => 'Komedija']
        ];
        DB::table('genres')->insert($genres);

        $movies = [
            ['movie_name' => 'Brzi i žestoki', 
            'description' => 'Jure sve u šesnaest..',
            'show_time' => Carbon::create('2021', '12', '20', '20'),
            'movie_length' => 120,
            'channel_id' => 2,
            'genre_id' => 1],
            ['movie_name' => 'Sam u kući', 
            'description' => 'Klinac postavlja zamke po kući.',
            'show_time' => Carbon::create('2021', '12', '23', '18', '30'),
            'movie_length' => 134,
            'channel_id' => 1,
            'genre_id' => 2]
        ];
        DB::table('movies')->insert($movies);

        $actors = [
            ['full_name' => 'Vin Diesel',
            'date_of_birth' => Carbon::create('1967', '07', '18'),
            'male' => true],
            ['full_name' => 'Macaulay Culkin',
            'date_of_birth' => Carbon::create('1980', '08', '26'),
            'male' => true],
            ['full_name' => 'Michelle Rodriguez',
            'date_of_birth' => Carbon::create('1978', '07', '12'),
            'male' => false]
        ];
        DB::table('actors')->insert($actors);

        $movie_actor = [
            ['actor_id' => 1, 'movie_id' => 1],
            ['actor_id' => 2, 'movie_id' => 2],
            ['actor_id' => 3, 'movie_id' => 1]
        ];
        DB::table('movie_actor')->insert($movie_actor);

        $actor_language = [
            ['actor_id' => 1, 'language_id' => 2],
            ['actor_id' => 2, 'language_id' => 2],
            ['actor_id' => 3, 'language_id' => 3]
        ];
        DB::table('actor_language')->insert($actor_language);
    }
}
