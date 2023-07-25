<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Favorite;
use App\Models\FilesProperty;
use App\Models\Nearby;
use App\Models\Property;
use Illuminate\Database\Seeder;
use joaquinpereira\Pexels\Facades\Pexels;

class PropertySeeder extends Seeder
{
    public $posters;
    public $photos;
    public $videos;
    public $locations;
    public $nearby;

    public $fileTypes;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->posters = Pexels::image_search('house, living room, bedroom', 1, 40, 'landscape')['photos'];
        $this->photos = Pexels::image_search('kitchen, bedroom, bathroom, garage', 1, 80, 'landscape')['photos'];
        $this->videos = Pexels::video_search('kitchen, bedroom, bathroom, garage', 1, 80, 'landscape')['videos'];
        $this->fileTypes = ['image', 'video'];
        $this->locations = $this->setLocations();

        $this->call(NearbyTypeSeeder::class);
        $this->call(CategoryPropertySeeder::class);
        City::factory(20)->create();
        $this->call(PropertyTypeSeeder::class);
        $this->call(PropertyStatusSeeder::class);
        $this->call(FeatureSeeder::class);

        $this->createProperties();
    }

    public function createProperties()
    {
        for($i=0; $i<30; $i++){
            $this->createNewProperty(rand(1, 10), $this->posters[$i]->sizes->landscape);
        }

        for($i=0; $i<10; $i++){
            $this->createNewProperty(1, $this->posters[$i]->sizes->landscape);
        }
    }



    public function createNewProperty($user_id, $poster)
    {
        Property::factory(1)->create([
            'user_id' => $user_id,
            'poster' => $poster,
            'category_id' => rand(1, 6),
            'city_id' => rand(1, 10),
            'property_type_id' => rand(1, 4),
            'property_status_id' => rand(1, 2),
            'location' => $this->locations[rand(0,4)],
        ])->each(function($property) use ($user_id){
            $n = rand(1,3); $features = array();
            for($i=0; $i < $n; $i++){
                $features[] = rand(1, 9);
            }
            $property->features()->sync($features);

            for($i=0; $i < rand(1,6); $i++){
                Nearby::factory()->create([
                    'property_id' => $property->id,
                    'nearby_type_id' => rand(1,5)
                ]);
            }

            for($i=0; $i < rand(0,10); $i++){
                $type = rand(0,1);
                FilesProperty::factory()->create([
                    'property_id' => $property->id,
                    'type' => $this->fileTypes[$type],
                    'url' => $type == 0 ? $this->photos[rand(0,79)]->sizes->landscape : $this->videos[rand(0, 79)]->video_files[0]->link
                ]);
            }

            Favorite::factory()->create([
                'user_id' => $user_id,
                'property_id' => $property->id
            ]);
        });
    }

    public function setLocations()
    {
        return [
            '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3923.256058981829!2d-66.8480465!3d10.4804695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5850a6883445%3A0xa395808ff216543d!2sEmbajada%20de%20Panam%C3%A1!5e0!3m2!1ses!2sve!4v1689948254094!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3923.256058981829!2d-66.8480465!3d10.4804695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a585bfcb17429%3A0x28d388bb4986b08f!2sNutrifitness!5e0!3m2!1ses!2sve!4v1689951570548!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4839.185460016257!2d-66.81025782354368!3d10.471925682501261!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1689951632388!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3923.367862378153!2d-66.81098986059492!3d10.471639271929718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a578a6b86876f%3A0xee9c62cd279e86fc!2sFamily%20Room%20In%20Caracas!5e0!3m2!1ses!2sve!4v1689951834543!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9080.7503180757!2d-66.80224340280586!3d10.465817291082262!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a579316e75023%3A0xbd5da1cf98cd7a36!2sPanaderia%20Flor%20De%20Valle%20Alto!5e0!3m2!1ses!2sve!4v1689951861422!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ];
    }
}
