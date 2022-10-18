<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;

class BlogFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(),
            "small_description" => $this->faker->text($maxNbChars = 500),
            "details" => $this->faker->text($maxNbChars = 10000),
            "category_id" => $this->faker->numberBetween(1, 6),
        ];
    }
}
