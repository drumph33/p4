@extends('layouts.app')

@section('title')
    Anxiety and Depression Scores
@endsection

@section('content')
    @foreach ($scores as $score)
    Your anxiety score is {{ $score->anxiety }}
    Your depression score is {{ $score->depression }}
    <form method='POST' action='/delete/{{ $score->id }}'>
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <input type='submit' value='Delete' class='btn btn-danger btn-small'>
    </form>
    <br>
    @endforeach
@endsection
