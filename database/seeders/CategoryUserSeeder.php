<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryUser;

class CategoryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
/*         for ($i = 1; $i <= 5; $i++) {
            CategoryUser::create([
                'category_id' => $i,
                'user_id' => 1,
            ]);
        }

        for ($i = 6; $i <= 10; $i++) {
            CategoryUser::create([
                'category_id' => $i,
                'user_id' => 2,
            ]);
        } */

        for ($i = 1; $i <= 10; $i++) {
            CategoryUser::create([
                'category_id' => $i,
                'user_id' => 1,
            ]);

            CategoryUser::create([
                'category_id' => $i,
                'user_id' => 2,
            ]);
        }
    }
}
