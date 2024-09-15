<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price'=>$this->faker->price(),
            'total_bought'=>$this->faker->is_integer(),
            'sponsor_id'=>$this->faker->numberBetween(1,15),
            'created_at'=>$this->faker->date(),
            'updated_at'=>$this->faker->date(),
            'description'=>$this->faker->realText()
        ];
    }
}
