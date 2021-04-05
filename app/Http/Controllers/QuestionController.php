<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Models\Question;
use App\Services\QuestionService;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QuestionService $questionService)
    {
        $data = [
            'randomQuestion' => $questionService->getRandomQuestion(),
            'questions' => $questionService->getOrderedQuestions()
        ];

        return view('questions.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $data = [
            'question' => $question->load('answers')
        ];

        return view('questions.show', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        $question = Question::create($request->validated());

        return redirect()->route('questions.show', $question)->with([
            'status' => 'success',
            'message' => 'Your question has been created successfully.'
        ]);
    }
}
