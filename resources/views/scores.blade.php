@extends('layouts.app')

@section('title')
    Anxiety and Depression Scores
@endsection

@section('content')
    <div class='container'>
        <div class='panel-body'>
            @foreach ($scores as $score)
                On {{ $score->created_at }} your anxiety score was {{ $score->anxiety }} and your depression score was {{ $score->depression }}.<br>
                <form method='POST' action='/delete/{{ $score->id }}'>
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <input type='submit' value='Delete' class='btn btn-danger btn-small'>
                </form>
                <form method='GET' action='/edit/{{ $score->id }}'>
                    <input type='submit' value='Edit' class='btn btn-primary btn-small'>
                </form>
                <form method='GET' action='/view/{{ $score->id }}'>
                    <input type='submit' value='View' class='btn btn-success btn-small'>
                </form>
                <br>
            @endforeach
        </div>
    </div>
@endsection
