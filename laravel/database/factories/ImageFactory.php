<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
		    'name' => $this->faker->name(),
            'size' => Str::length(6),
            'path' => '../images/prod_9.webp',
            'article_id'=>$this->faker->numberBetween(1,10)
        ];
    }
}
