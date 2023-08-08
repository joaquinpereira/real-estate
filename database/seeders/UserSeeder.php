<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use joaquinpereira\Pexels\Facades\Pexels;
use Spatie\Permission\Models\Role;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photo = Pexels::image_search('person, user', 1, 20, 'square', 'small')['photos'];
        $admin = Role::findByName('super-admin');

        $user = User::factory()->create([
            'name' => 'Joaquin Pereira',
            'email' => 'pereira.joaquin@gmail.com',
            'profile_picture' => $photo[0]->sizes->portrait
        ]);
        $user->assignRole($admin);

        for($i=1; $i<=10; $i++)
        {
            $user = User::factory()->create([
                'profile_picture' => $photo[$i]->sizes->portrait
            ]);
            $user->assignRole($admin);
        }
    }

}
