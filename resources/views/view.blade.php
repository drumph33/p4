@extends('layouts.app')

@section('title')
    Anxiety and Depression Score View
@endsection


@section('content')
    <div class='container'>
        <div class='panel-body'>
            The date this survey was taken:  {{ $scores->created_at }} <br>
            Anxiety score: {{ $scores->anxiety }}
            <br>
            Depression score: {{ $scores->depression }}
            <br>
            Influencers: <br>

            @foreach ($tagsForThisScore as $id => $name)
                {{ $name }} <br>
            @endforeach

            <form method='get' action='/scores'>
                <input type='submit' value='Back to Scores' class='btn btn-primary btn-small'>
            </form>
        </div>
    </div>



@endsection
