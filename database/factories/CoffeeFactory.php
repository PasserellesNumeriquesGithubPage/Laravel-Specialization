<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Coffee;

class CoffeeFactory extends Factory
{

    protected $model = Coffee::class;
    /**
     * Define the model's default state.
     *
     *
     * @return array
     */
    public function definition()
    {
        return [
            'coffee'=> $this->faker->randomElement(['Top Coffee','Greatest White','Kopiko', 'Top 45', 'Nescafe','Barako']),
            'description'=> $this->faker->text,
            'country'=> $this->faker->country,
            'user_id' => User::first(),
        ];
    }
}
