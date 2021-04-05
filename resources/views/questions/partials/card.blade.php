<div class="card w-100">                    
    <div class="card-body d-flex flex-column">                      
      <h6 class="card-text mb-3 font-weight-bold">{{ $question->text }}</h6>
      <small class="card-text text-muted d-block mb-1">Asked <span class="text-muted">{{ $question->created_at->diffForHumans() }}</span></small>
      <small class="card-text text-muted d-block mb-3"><b class="text-primary">{{ $question->answers->count() }}</b> answers</small>
      <a href="{{ route('questions.show', $question) }}" class="btn btn-outline-primary btn-sm mt-auto">Answer this question</a>
    </div>
</div>