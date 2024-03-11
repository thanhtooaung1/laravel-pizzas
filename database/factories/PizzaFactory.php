<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $choiceToppings = [
            'Onion',
            'Extra Cheese',
            'Black Olives',
            'PepperOni',
            'Chicken',
            'Ground Beef',
        ];

        // $toppings = [];

        // for ($i = 0; $i <= rand(1, 4); $i++) {
        //     $toppings[] = Arr::random($choiceToppings);
        // }


        return [
            'id' => rand(1111, 99999),
            'user_id' => rand(1, 10),
            'size' => Arr::random(['Small', 'Medium', 'Large', 'Xtra-Large']),
            'cruse' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => Arr::random($choiceToppings),
            'status' => Arr::random(['Ordered', 'Prepping', 'Baking', 'Checking', 'Ready']),
        ];
    }
}
