<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=2,$asText=true); 
        $slug = str::slug($product_name);
        return [
             'name' =>  $product_name,
             'slug' =>  $slug,
             'short_description'=> $this->faker->text(200),
             'description'=> $this->faker->text(500),
             'regular_price'=> $this->faker->numberBetween(10,500),
             'SKU'=>'DIGI'.$this->faker->unique()->numberBetween(100,500),
             'stock_status'=>'instock',
             'quantity'=> $this->faker->numberBetween(100,200),
             'image' =>$this->faker->unique()->numberBetween(1,22).'.png',
             'category_id'=> $this->faker->numberBetween(1,5),
        ];
    }
}
