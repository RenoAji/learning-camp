@extends('layouts.app')
@section('body')
@parent

<div class="navbar bg-neutral text-neutral-content">
    <a href="/course/{{$section->course_id}}/section/{{$section->id}}" class="btn btn-ghost text-xl">
    {{$section->title}}
    </a>
</div>
<div class="my-4 ml-5">
@foreach ($section->questions as $i => $question)
    <div class="my-4 border-b py-3">
        <h1 class="text-4xl mb-2">
            {{$question->question}}
        </h1>

        <div class="space-y-1">
            @foreach ($question->answers as $answer)
                <div class="content-center flex gap-2"> 
                    <h2>{{$answer->text}}</h2>        
                </div>
            @endforeach
        </div>
    </div>
@endforeach
    <button type="submit" class="btn btn-primary my-5">Selesai</button>
</div>

@endsection