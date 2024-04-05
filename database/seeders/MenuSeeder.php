<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use Str;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'=>"Alcohol",
                'image'=>'documents/fake/images/alcohol.png'
            ],
            [
                'name'=>"Light And Hot Drink",
                'image'=>'documents/fake/images/light_hot_drink.png'
            ],
            [
                'name'=>"Desserts",
                'image'=>'documents/fake/images/desserts.png'
            ],
            [
                'name'=>"Main dishes",
                'image'=>'documents/fake/images/main_dish.png'
            ],

            [
                'name'=>"Starters",
                'image'=>'documents/fake/images/starters.png'
            ],


        ];

        foreach ($data as $item) {
            $input['name'] = $item['name'];
            $input['slug'] = Str::slug($input['name']);
            $input['image'] =$item['image'];
            Menu::create($input);
        }
    }
}
