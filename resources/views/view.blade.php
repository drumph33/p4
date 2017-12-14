@extends('layouts.app')

@section('title')
    Anxiety and Depression Score View
@endsection


@section('content')
    <div class='container'>
        <div class='panel-body'>
            <h4><span class="bold-title">Date taken:</span> {{ $scores->created_at->format('m/d/y') }}</h4>
            <h4><span class="bold-title">Anxiety score:</span> {{ $scores->anxiety }} ({{ $scores->alevel }})</h4>
            <h4><span class="bold-title">Depression score:</span> {{ $scores->depression }} ({{ $scores->dlevel }})</h4>
            <h4 class="bold-title">Influencers:</h4>
            <ul>
            @foreach ($tagsForThisScore as $id => $name)
                <li>{{ $name }}</li>
            @endforeach
            </ul>
            <br>
            <form method='get' action='/scores'>
                <input type='submit' value='Back to Scores' class='btn btn-primary btn-small'>
            </form>
        </div>
    </div>



@endsection
