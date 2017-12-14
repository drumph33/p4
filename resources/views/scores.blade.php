@extends('layouts.app')

@section('title')
    Anxiety and Depression Scores
@endsection

@section('content')
    <div class='container'>
        <div class='panel-body'>
            @foreach ($scores as $score)
                <h3>
                    <div><span class="bold-title">Date:</span> {{ $score->created_at->format('m/d/y') }}</div>
                    <div><span class="bold-title">Anxiety Score:</span> {{ $score->anxiety }} ({{ $score->alevel }})</div>
                    <div><span class="bold-title">Depression score:</span> {{ $score->depression }} ({{ $score->dlevel }})</div>
                </h3>
                <form method='GET' action='/view/{{ $score->id }}' class="scores-view-button">
                    <input type='submit' value='View' class='btn btn-success btn-small scores-btn-input'>
                </form>
                <form method='GET' action='/edit/{{ $score->id }}' class="scores-view-button">
                    <input type='submit' value='Edit' class='btn btn-primary btn-small scores-btn-input'>
                </form>
                <form method='POST' action='/delete/{{ $score->id }}' class="scores-view-button-last">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <input type='submit' value='Delete' class='btn btn-danger btn-small scores-btn-input'>
                </form>
                <br>
            @endforeach
        </div>
    </div>
@endsection
