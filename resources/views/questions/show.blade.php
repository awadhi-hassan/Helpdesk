@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card row">
        <div class="card-header" style="text-align:center; font-weight:bold">Question Description</div>
        <div class="card-body d-flex">
            <a href="/profile/{{ $question->user->id }}">
                <div class="pr-3">
                    <img src="/storage/{{ $user->profile->profile_photo }}" style="height:30px; width:30px; border-radius:50%">
                </div>
            </a>
            <div>
                {{ $question->question }}
            </div>
        </div>
        
        <div class="card-header" style="text-align:center; font-weight:bold">Answers</div>
        <div class="card-body d-flex">
            @foreach($answers as $answer)
            <a href="/profile/{{ $answer->user->id }}">
                <div class="pr-3">
                    <img src="/storage/{{ $answer->user->profile->profile_photo }}" style="height:30px; width:30px; border-radius:50%">
                </div>
            </a>
            <div>
                {{ $answer->answer }}
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
