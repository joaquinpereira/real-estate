<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $this->createPermissions();

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }

    public function createPermissions()
    {
        //Category
        Permission::create(['name' => 'Create Category']);
        Permission::create(['name' => 'Update Category']);
        Permission::create(['name' => 'View Category']);
        Permission::create(['name' => 'Delete Category']);

        //CategoryProperty
        Permission::create(['name' => 'Create CategoryProperty']);
        Permission::create(['name' => 'Update CategoryProperty']);
        Permission::create(['name' => 'View CategoryProperty']);
        Permission::create(['name' => 'Delete CategoryProperty']);

        //City
        Permission::create(['name' => 'Create City']);
        Permission::create(['name' => 'Update City']);
        Permission::create(['name' => 'View City']);
        Permission::create(['name' => 'Delete City']);

        //Comment
        Permission::create(['name' => 'Create Comment']);
        Permission::create(['name' => 'Update Comment']);
        Permission::create(['name' => 'View Comment']);
        Permission::create(['name' => 'Delete Comment']);

        //Favorite
        Permission::create(['name' => 'Create Favorite']);
        Permission::create(['name' => 'Update Favorite']);
        Permission::create(['name' => 'View Favorite']);
        Permission::create(['name' => 'Delete Favorite']);

        //Feature
        Permission::create(['name' => 'Create Feature']);
        Permission::create(['name' => 'Update Feature']);
        Permission::create(['name' => 'View Feature']);
        Permission::create(['name' => 'Delete Feature']);

        //FilesProperty
        Permission::create(['name' => 'Create FilesProperty']);
        Permission::create(['name' => 'Update FilesProperty']);
        Permission::create(['name' => 'View FilesProperty']);
        Permission::create(['name' => 'Delete FilesProperty']);

        //Nearby
        Permission::create(['name' => 'Create Nearby']);
        Permission::create(['name' => 'Update Nearby']);
        Permission::create(['name' => 'View Nearby']);
        Permission::create(['name' => 'Delete Nearby']);

        //NearbyType
        Permission::create(['name' => 'Create NearbyType']);
        Permission::create(['name' => 'Update NearbyType']);
        Permission::create(['name' => 'View NearbyType']);
        Permission::create(['name' => 'Delete NearbyType']);

        //Post
        Permission::create(['name' => 'Create Post']);
        Permission::create(['name' => 'Update Post']);
        Permission::create(['name' => 'View Post']);
        Permission::create(['name' => 'Delete Post']);

        //Property
        Permission::create(['name' => 'Create Property']);
        Permission::create(['name' => 'Update Property']);
        Permission::create(['name' => 'View Property']);
        Permission::create(['name' => 'Delete Property']);

        //PropertyStatus
        Permission::create(['name' => 'Create PropertyStatus']);
        Permission::create(['name' => 'Update PropertyStatus']);
        Permission::create(['name' => 'View PropertyStatus']);
        Permission::create(['name' => 'Delete PropertyStatus']);

        //PropertyType
        Permission::create(['name' => 'Create PropertyType']);
        Permission::create(['name' => 'Update PropertyType']);
        Permission::create(['name' => 'View PropertyType']);
        Permission::create(['name' => 'Delete PropertyType']);

        //Tag
        Permission::create(['name' => 'Create Tag']);
        Permission::create(['name' => 'Update Tag']);
        Permission::create(['name' => 'View Tag']);
        Permission::create(['name' => 'Delete Tag']);

        //User
        Permission::create(['name' => 'Create User']);
        Permission::create(['name' => 'Update User']);
        Permission::create(['name' => 'View User']);
        Permission::create(['name' => 'Delete User']);
    }
}
