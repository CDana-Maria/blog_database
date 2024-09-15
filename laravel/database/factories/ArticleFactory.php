<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker-> name(),
            'short_description' =>$this->faker->realText(),
            'content'=> $this->faker->realText(),
            // 'author_id'=>$this->faker->numberBetween(0,5),
            // 'image_id'=>$this->faker->numberBetween(0,5),
            // 'category_id'=>$this->faker->numberBetween(0,5),
            'author_id'=>$this->faker->numberBetween(1,5),
            'category_id'=>$this->faker->numberBetween(1,5),
            'modified_at'=>$this->faker->date(),
            'seo_title'=>$this->faker->title(),
            'seo_description' => $this->faker->title(),
            'slug' =>Str::slug($this->faker->name(), '-')
        ];
    }
}

