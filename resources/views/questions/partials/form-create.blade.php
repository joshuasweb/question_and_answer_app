<form method="POST" action="{{ route('questions.store') }}">
    @csrf
    <div class="form-group">
        <label for="question">What would you like to ask?</label>
        <textarea name="text"
            class="form-control @error('text') alert-danger border-danger @enderror"
            id="question"
            aria-describedby="questionHelp"
            placeholder="{{ $randomQuestion }}"
        >{{ old('text') }}</textarea>           
       
        @error('text')
            <div class="text-danger mt-2">{{ $message }}</div>
        @else
            <small id="questionHelp" class="form-text text-muted">Anyone will be able to answer your question once you have posted it.</small>
        @enderror
    </div>        
    <button type="submit" class="btn btn-primary">Ask question now!</button>
</form>