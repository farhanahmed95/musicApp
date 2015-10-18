<?php

use Illuminate\Database\Seeder;
use App\Artist;
class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_GB');

        $faker->addProvider(new Faker\Provider\en_GB\Address($faker));
        $faker->addProvider(new Faker\Provider\en_GB\Internet($faker));
        $faker->addProvider(new Faker\Provider\Uuid($faker));
        foreach(range(1,10) as $index)
        {
            Artist::create([
                'name'=>$faker->name,
                'role'=>$faker->word,
                'description'=>$faker->paragraph,
                'uri'=>route('artist',['id'=>$index]),
                'artwork_uri'=>$faker->imageUrl(640,480,'people')
            ]);
        }
    }
}
