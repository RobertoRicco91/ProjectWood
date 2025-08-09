<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $categories = [
        'Lampade da tavolo',
        'Lampade da letto',
        'Lampade da cucina',
        'Lampade da soggiorno',
        'Decorazioni da tavolo',
        'Decorazioni da soggiorno',
    ];
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
