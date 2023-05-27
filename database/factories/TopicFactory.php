<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        $sentence = fake()->sentence();
        return [
            'title' => $sentence,
            'body' => fake()->text(),
            'excerpt' => $sentence,
            'user_id' => fake()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]),
            'category_id' => fake()->randomElement([1, 2, 3, 4]),
        ];
    }
}
