<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Create a factory for the posts table, every post should have a title, date published, text content (can be lorem ipsum), and an image, author name,author id, category id, and category name.

            'title' => $this->faker->sentence(3),
            'date_published' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'text_content' => $this->faker->paragraph(3),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'author_name' => $this->faker->name(),
            'author_id' => $this->faker->numberBetween(1, 10),
            'category_id' => $this->faker->numberBetween(1, 10),
            'category_name' => $this->faker->word(),
            'url_slug' => $this->faker->slug(),


        ];
    }
}
