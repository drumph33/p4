@extends('layouts.app')

@section('title')
    Anxiety and Depression Score View
@endsection


@section('content')
    <div class='container'>
        <div class='panel-body'>
            <h3><span class="bold-title">Date taken:</span> {{ $scores->created_at->format('m/d/y') }}</h3>
            <h3><span class="bold-title">Anxiety score:</span> {{ $scores->anxiety }} ({{ $scores->alevel }})</h3>
            <h3><span class="bold-title">Depression score:</span> {{ $scores->depression }} ({{ $scores->dlevel }})</h3>
            <br>
            <h3 class="bold-title">Influencers:</h3>
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
