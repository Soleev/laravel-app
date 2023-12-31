<?php

namespace Database\Factories;

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
        $title = $this->faker->sentence(6,true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/','-', $title)),0,-1);

        return [
            'title' => $title,
            'body' =>$this->faker->paragraph(100, true),
            'slug' =>$slug,
            'img' => 'https://dummyimage.com/600/000/ffffff&text=laravel:12.*',
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
