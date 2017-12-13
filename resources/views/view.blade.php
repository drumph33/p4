@extends('layouts.app')

@section('title')
    Anxiety and Depression Score View
@endsection


@section('content')
    <div class='container'>
        <div class='panel-body'>
            <h3>Date taken:  {{ $scores->created_at }} <br>
            <br>Anxiety score: {{ $scores->anxiety }}
            <br>
            Depression score: {{ $scores->depression }}</h3>
            <br>
            <h4>Influencers: <br>

            @foreach ($tagsForThisScore as $id => $name)
                <br> {{ $name }}
            @endforeach
            </h4>
            <br>

            <form method='get' action='/scores'>
                <input type='submit' value='Back to Scores' class='btn btn-primary btn-small'>
            </form>
        </div>
    </div>



@endsection
