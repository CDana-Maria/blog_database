<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organizator_id'=> $this->faker->numberBetween(1,15),
            'email' => $this->faker->unique()->safeEmail(),
            'address'=>$this->faker->address(),
            'created_at'=>$this->faker->date(),
            'updated_at'=>$this->faker->date()
        ];
    }
}
