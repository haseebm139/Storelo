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
                'name_in_he'=>"אלכוהול",
                'image'=>'documents/fake/images/alcohol.png'
            ],
            [
                'name'=>"Light And Hot Drink",
                'name_in_he'=>"שתיה קלה&חמה",
                'image'=>'documents/fake/images/light_hot_drink.png'
            ],
            [
                'name'=>"Desserts",
                'name_in_he'=>"קינוחים",
                'image'=>'documents/fake/images/desserts.png'
            ],
            [
                'name'=>"Main dishes",
                'name_in_he'=>"מנות עיקריות",
                'image'=>'documents/fake/images/main_dish.png'
            ],

            [
                'name'=>"Starters",
                'name_in_he'=>"מנות ראשונות",
                'image'=>'documents/fake/images/starters.png'
            ],


        ];

        foreach ($data as $item) {
            $input['name'] = $item['name'];
            $input['name_in_he'] = $item['name_in_he'];
            $input['slug'] = Str::slug($input['name']);
            $input['image'] =$item['image'];
            Menu::create($input);
        }
    }
}
