<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionAnswerRequest;
use App\Models\Question;
use App\Models\QuestionAnswer;

class QuestionAnswerController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionAnswerRequest $request, Question $question)
    {
        $answer = new QuestionAnswer($request->validated());
        $answer->question()->associate($question);
        $answer->save();

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Thanks for providing an answer'
        ]);
    }
}
