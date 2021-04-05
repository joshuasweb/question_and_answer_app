@extends('layouts.app')

@section('content')
	<div class="container pt-2 pb-2"> 
		<h1 class="text-center my-5 text-light">{{ $question->text }}</h1>
		<section class="mb-4">
			<h4 class="mb-3 text-light">Answers</h4>
			@if ($question->has_answers)
				<ul class="list-group">
				@foreach ($question->answers as $answer)
					<li class="list-group-item d-flex justify-content-between"><span>{{ $answer->text }}</span> <small class="text-muted">{{ $answer->created_at->diffForHumans() }}</small></li>           
				@endforeach
				</ul>  
			@endif
		</section>
		<section class="mb-5 bg-light px-4 py-4">
			@include('questions.answers.partials.form-create')
		</section>
	</div>
@endsection