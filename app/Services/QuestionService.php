<?php

namespace App\Services;

use App\Models\Question;

class QuestionService
{
    private $placeholderQuestions;

    public function __construct()
    {
        $this->placeholderQuestions = [
            'What secret conspiracy would you like to start?',
            'What is the meaning of life?',
            'What is your favorite animal?',
            'How much wood could a woodchuck chuck If a woodchuck could chuck wood?',
            'How do you feel about putting pineapple on pizza?'
        ];
    }

    public function getRandomQuestion()
    {
        return $this->placeholderQuestions[array_rand($this->placeholderQuestions)];
    }

    public function getOrderedQuestions()
    {
        return Question::orderBy('created_at', 'desc')->get();
    }
}
