<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $romance = Genre::create(['name' => 'Romance']);
        $family = Genre::create(['name' => 'Family']);
        $historical = Genre::create(['name' => 'Historical']);
        $crime = Genre::create(['name' => 'Crime']);
        $comedy = Genre::create(['name' => 'Comedy']);
        $action = Genre::create(['name' => 'Action']);
        $horror = Genre::create(['name' => 'Horror']);
        $drama = Genre::create(['name' => 'Drama']);

        Movie::create([
            'title' => 'Hello, Love, Goodbye',
            'director' => 'Cathy Garcia-Sampana',
            'genre_id' => $romance->id,
            'year' => 2019
        ]);

        Movie::create([
            'title' => 'Four Sisters and a Wedding',
            'director' => 'Cathy Garcia-Sampana',
            'genre_id' => $family->id,
            'year' => 2013
        ]);

        Movie::create([
            'title' => 'Seven Sundays',
            'director' => 'Cathy Garcia-Sampana',
            'genre_id' => $family->id,
            'year' => 2017
        ]);

        Movie::create([
            'title' => 'That Thing Called Tadhana',
            'director' => 'Antoinette Jadaone',
            'genre_id' => $romance->id,
            'year' => 2014
        ]);

        Movie::create([
            'title' => 'Heneral Luna',
            'director' => 'Jerrold Tarog',
            'genre_id' => $historical->id,
            'year' => 2015
        ]);

        Movie::create([
            'title' => 'Goyo: Ang Batang Heneral',
            'director' => 'Jerrold Tarog',
            'genre_id' => $historical->id,
            'year' => 2018
        ]);

        Movie::create([
            'title' => 'The Hows of Us',
            'director' => 'Cathy Garcia-Sampana',
            'genre_id' => $romance->id,
            'year' => 2018
        ]);

        Movie::create([
            'title' => 'One More Chance',
            'director' => 'Cathy Garcia-Sampana',
            'genre_id' => $romance->id,
            'year' => 2007
        ]);

        Movie::create([
            'title' => 'Kita Kita',
            'director' => 'Sigrid Andrea Bernardo',
            'genre_id' => $romance->id,
            'year' => 2017
        ]);

        Movie::create([
            'title' => 'Anak',
            'director' => 'Rory Quintos',
            'genre_id' => $family->id,
            'year' => 2000
        ]);

        Movie::create([
            'title' => 'Tanging Yaman',
            'director' => 'Laurice Guillen',
            'genre_id' => $family->id,
            'year' => 2000
        ]);

        Movie::create([
            'title' => 'On the Job',
            'director' => 'Erik Matti',
            'genre_id' => $action->id,
            'year' => 2013
        ]);

        Movie::create([
            'title' => 'BuyBust',
            'director' => 'Erik Matti',
            'genre_id' => $action->id,
            'year' => 2018
        ]);

        Movie::create([
            'title' => 'Feng Shui',
            'director' => 'Chito S. Roño',
            'genre_id' => $horror->id,
            'year' => 2004
        ]);

        Movie::create([
            'title' => 'Sukob',
            'director' => 'Chito S. Roño',
            'genre_id' => $horror->id,
            'year' => 2006
        ]);

        Movie::create([
            'title' => 'Seklusyon',
            'director' => 'Erik Matti',
            'genre_id' => $horror->id,
            'year' => 2016
        ]);

        Movie::create([
            'title' => 'Ang Babae sa Septic Tank',
            'director' => 'Marlon Rivera',
            'genre_id' => $comedy->id,
            'year' => 2011
        ]);

        Movie::create([
            'title' => 'Petrang Kabayo',
            'director' => 'Wenn V. Deramas',
            'genre_id' => $comedy->id,
            'year' => 2010
        ]);

        Movie::create([
            'title' => 'Magnifico',
            'director' => 'Maryo J. de los Reyes',
            'genre_id' => $drama->id,
            'year' => 2003
        ]);

        Movie::create([
            'title' => 'Rewind',
            'director' => 'Mae Cruz-Alviar',
            'genre_id' => $drama->id,
            'year' => 2023
        ]);
    }
}
