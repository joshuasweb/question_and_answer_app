@extends('layouts.app')

@section('content')
   <div class="container pt-2 pb-2"> 
        <h1 class="text-center my-5 text-light">Question and Answer App</h1>
        <section class="mb-5 bg-light px-4 py-4">
            <h4 class="mb-3">Ask a question</h4>
            @include('questions.partials.form-create')
        </section>
        <section>
            <h4 class="mb-4 text-light">Check out some asked questions</h4>
            <div class="row">
                @foreach ($questions as $question)
                    <div class="col-lg-4 col-md-6 col-12 mb-4 d-flex w-100">
                        @include('questions.partials.card')
                    </div>
                @endforeach                
            </div>
        </section>
   </div>
@endsection