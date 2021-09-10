@extends('layouts.app')

@section('content')
<div class="container" style="align-items:center">
    <div class="card">
        <div class="card-header" style="text-align:center;"><strong>Create Your Answer</strong></div>
        <div class="card-body">
            <form action="/questions/{{ $question->id }}/answer" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="question" class="col-md-4 col-form-label text-md-right">Answer</label>
                    
                    <div class="col-md-6">
                        <textarea id="answer" rows="3" name="answer" class="form-control @error('answer') is-invalid @enderror" placeholder="Type your answer here...">{{ old('answer') }}</textarea>
                        
                        @error('answer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Create Answer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
