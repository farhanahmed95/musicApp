<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Album::create([
            'name'=>'My Love',
            'released_at'=>\Carbon\Carbon::now(),
            'publisher'=>'Farhan Music Publishers',
            'duration'=>120932,
            'image_path'=>'http://assets5.capitalxtra.com/2013/50/route-94---my-love-1387536032-hero-promo-0.jpg',
        ]);
    }
}
