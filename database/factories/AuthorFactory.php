<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'about' => $this->faker->sentence(15),
            'social_media' => [
                'facebook' => 'https://facebook.com/' . $slug,
                'twitter' => 'https://twitter.com/' . $slug
            ],
        ];
    }
}
