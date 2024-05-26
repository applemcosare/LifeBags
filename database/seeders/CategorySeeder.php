<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categs = [
            [
                'name' => 'Hand Bags'
            ],
            [
                'name' =>  'Backpacks'
            ],
            [
                'name' => 'Travel Bags'
            ],
            [
                'name' => 'Messenger Bags'
            ],
            [
                'name' => 'Tote Bags'
            ]
        ];

        foreach ($categs as $categoryName) {
            Category::create( $categoryName);
        }
    }
}
