<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => $this->faker->sentence(3),
            'content' => $this->faker->paragraph(6),
            'published_at' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement([
                Article::STATUS_APPROVED, Article::STATUS_DRAFT, Article::STATUS_NEED_APPROVAL
            ]),
        ];
    }
}
