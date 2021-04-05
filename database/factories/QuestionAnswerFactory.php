<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\QuestionAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionAnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = QuestionAnswer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_id' => Question::all()->random()->id,
            'text' => ucfirst($this->faker->words(rand(1, 12), true))
        ];
    }
}
