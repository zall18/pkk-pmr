<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $type = ['article', 'video', 'image'];

        return [
            'title' => fake()->sentence(3),
            'slug' => fake()->slug(),
            'desc' => fake()->paragraph(2),
            'body' => fake()->paragraph(),
            'status' => 'disetujui',
            'type_post' => $type[array_rand($type)],
            'id_user' => mt_rand(1, 5),
            'id_category' => mt_rand(1, 3)
        ];
    }
}
