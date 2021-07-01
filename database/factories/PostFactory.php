<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*return [
            'title' => $this->faker->words(),
            'slug'  => $this->faker->slug,
            'img'   => 'https://picsum.photos/640/480',
            'body'  => $this->faker->realText()
        ];*/

        Post::truncate();

        return [
            'title' => $this->faker->sentence(),
            'slug'  => $this->faker->slug,
            'img'   => 'https://picsum.photos/640/480',
            'body'  => $this->faker->realText(500, 3)
        ];
    }
}
