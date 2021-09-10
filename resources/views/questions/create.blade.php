<x-app-layout>
    <x-slot name="header">
        <strong>Create Questions</strong>
    </x-slot>

    <div class="container" style="align-items:center">
        <div class="card">
            <div class="card-header" style="text-align:center;"><strong>Create Your Question</strong></div>
            <div class="card-body">
                <form action="/questions" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="question" class="col-md-4 col-form-label text-md-right">Question</label>
                        
                        <div class="col-md-6">
                            <textarea id="question" rows="3" name="question" class="form-control @error('question') is-invalid @enderror">{{ old('question') }}</textarea>
                            
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Create Question</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>