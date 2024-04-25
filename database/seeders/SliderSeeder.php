<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
use Str;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title'=>"Some descriptive text goes here",
                'title_in_he'=>"טקסט מתאר הולך כאן",
                'description'=>"Lorem Ipsum is simply dummy",
                'description_in_he'=>"לורם איפסום הוא סתם דמו",
                'image'=>'documents/fake/images/s1.png'
            ],
            [
                'title'=>"Some descriptive text goes here",
                'title_in_he'=>"טקסט מתאר הולך כאן",
                'description'=>"Lorem Ipsum is simply dummy",
                'description_in_he'=>"לורם איפסום הוא סתם דמו",
                'image'=>'documents/fake/images/s1.png'
            ],
            [
                'title'=>"Some descriptive text goes here",
                'title_in_he'=>"טקסט מתאר הולך כאן",
                'description'=>"Lorem Ipsum is simply dummy",
                'description_in_he'=>"לורם איפסום הוא סתם דמו",
                'image'=>'documents/fake/images/s1.png'
            ],
        ];

        foreach ($data as $item) {
            $input['title'] = $item['title'];
            $input['title_in_he'] = $item['title_in_he'];
            $input['description'] = $item['description'];
            $input['description_in_he'] = $item['description_in_he'];

            $input['image'] =$item['image'];
            Slider::create($input);
        }
    }
}
