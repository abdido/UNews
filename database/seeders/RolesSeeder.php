<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'	=> 'superadmin',
         ]);

         Role::create([
            'name'	=> 'writer',
         ]);

         Role::create([
            'name' => 'reader'
         ]);



    }
}
