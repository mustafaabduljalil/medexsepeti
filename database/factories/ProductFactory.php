<?php

namespace Database\Factories;

use App\Constants\Constants;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $discountValues = [0, 10];
        $randomDiscountValue = $discountValues[array_rand($discountValues)];

        return [
            'name'=> $this->faker->name,
            'barcode'=> $this->faker->unique()->numberBetween(1000, 1000000),
            'short_description'=> $this->faker->realText(150),
            'long_description'=> $this->faker->realText(),
            'price'=> $this->faker->randomDigitNotZero(),
            'quantity'=> $this->faker->randomDigitNotNull(),
            'views'=> $this->faker->randomDigit(),
            'category_id'=> Category::query()->inRandomOrder()->value('id'),
            'brand_id'=> Brand::query()->inRandomOrder()->value('id'),
            'status'=> Constants::ACTIVE_STATUS,
            'discount'=> $randomDiscountValue,
            'discount_type'=> $randomDiscountValue != 0 ? Constants::DISCOUNT_FIXED_VALUE_TYPE : null,
            'discount_start_at'=> $randomDiscountValue != 0 ? $this->faker->dateTime('-1 months') : null,
            'discount_end_at'=> $randomDiscountValue != 0 ? $this->faker->dateTimeBetween('0 months', '+1 months') : null
        ];
    }
}
