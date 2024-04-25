<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SpecialProduct;
use Str;
class SpecialProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title'=>"TROPICAL COCKTAIL",
                'title_in_he'=>"קוקטייל טרופי",
                'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                'description_in_he'=>"לורם איפסום הוא סתם טקסט דמו של תעשיית הדפוס וההפקה",
                'image'=>'documents/fake/images/sp1.png'
            ],

            [
                'title'=>"NEMESIS CHOCOLATES",
                'title_in_he'=>"שוקולדי נמסיס",
                'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                'description_in_he'=>"לורם איפסום הוא סתם טקסט דמו של תעשיית הדפוס וההפקה",
                'image'=>'documents/fake/images/sp1.png'
            ],

            [
                'title'=>"SWEET POTATO CARPACCI FIRE",
                'title_in_he'=>"קרפאצ'ו של תפוח סלע מתוק באש",
                'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                'description_in_he'=>"לורם איפסום הוא סתם טקסט דמו של תעשיית הדפוס וההפקה",
                'image'=>'documents/fake/images/sp1.png'
            ],

        ];

        foreach ($data as $item) {
            $input['title'] = $item['title'];
            $input['title_in_he'] = $item['title_in_he'];
            $input['description'] = $item['description'];
            $input['description_in_he'] = $item['description_in_he'];

            $input['image'] =$item['image'];
            SpecialProduct::create($input);
        }
    }
}
