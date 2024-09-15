<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Organizators;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizatorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organizator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name()
        ];
    }
}
