<?php

namespace Database\Seeders;

use App\Models\NotificationCategory;
use Illuminate\Database\Seeder;

class NotificationCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotificationCategory::create([
            'title' => 'all'
         ]);
        NotificationCategory::create([
            'title' => 'user'
         ]);
        NotificationCategory::create([
            'title' => 'read'
         ]);
    }
}
