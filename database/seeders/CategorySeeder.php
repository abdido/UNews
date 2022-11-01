<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Berita Langsung'
         ]);
        Category::create([
            'name' => 'Berita Mendalam'
         ]);
        Category::create([
            'name' => 'Berita Investigasi'
         ]);
        Category::create([
            'name' => 'Berita Interpretatif'
         ]);
    }
}
