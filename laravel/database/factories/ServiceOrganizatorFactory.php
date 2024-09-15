<?php

namespace Database\Factories;

use App\Models\ServiceOrganizator;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceOrganizatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceOrganizator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => $this->faker->numberBetween(1, 15),
            'organizator_id' => $this->faker->numberBetween(1, 10)
       
        ];
    }
}
