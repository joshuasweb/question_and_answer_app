<form method="POST" action="{{ route('questions.answers.store', $question) }}">
    @csrf
    <div class="form-group">
        <label for="question">
            @if ($question->has_answers)
                Provide another answer
            @else
                Provide the first answer
            @endif
                to this question
        </label>
        <textarea name="text"
            class="form-control @error('text') alert-danger border-danger @enderror"
            id="answer"
            aria-describedby="answerHelp"
            placeholder="Your answer goes here..."
        >{{ old('text') }}</textarea>
        @error('text')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
    </div>        
    <button type="submit" class="btn btn-primary">Answer now!</button>
</form>