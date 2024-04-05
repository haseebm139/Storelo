<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Str;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            $input['menu_id']=$faker->numberBetween($min = 1, $max = 5);
            $input['category_id']=$faker->numberBetween($min = 1, $max = 15);
            $input['image']="documents/fake/images/".$faker->numberBetween($min = 1, $max = 11).'.png';
            $input['name']=$faker->name;
            $input['slug']=Str::slug($faker->name);
            $input['price']=$faker->numberBetween($min = 20, $max = 10);
            Product::create($input);
        }
    }
}
