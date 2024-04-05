<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>"Beers",
            ],
            [
                'name'=>"Vodka",
            ],
            [
                'name'=>"Whiskey",
            ],
            [
                'name'=>"Gin",
            ],
            [
                'name'=>"Tequila",
            ],
            [
                'name'=>"Anise",
            ],
            [
                'name'=>"Rum",
            ],
            [
                'name'=>"Aperitif",
            ],
            [
                'name'=>"Liquor",
            ],
            [
                'name'=>"Cognac",
            ],
            [
                'name'=>"White Wine",
            ],
            [
                'name'=>"Red wine",
            ],
            [
                'name'=>"Sparkling",
            ],
            [
                'name'=>"Rosé Wine",
            ],
            [
                'name'=>"Cocktails",
            ],


        ];

        foreach ($data as $item) {
            $input['name'] = $item['name'];
            $input['slug'] = Str::slug($input['name']);
            $input['menu_id'] = random_int(1,5);

            Category::create($input);
        }
    }
}
