<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use joaquinpereira\Pexels\Facades\Pexels;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photo = Pexels::image_search('person, user', 1, 20)['photos'];
        User::factory()->create([
            'name' => 'Joaquin Pereira',
            'email' => 'pereira.joaquin@gmail.com',
            'profile_picture' => $photo[0]->sizes->portrait
        ]);

        for($i=1; $i<=10; $i++)
        {
            User::factory()->create([
                'profile_picture' => $photo[$i]->sizes->portrait
            ]);
        }
    }
}
