@extends('layouts.app')

@section('title')
    Anxiety and Depression Results
@endsection

@section('content')
    <div class='container'>
        <div class='panel-body'>
            <h3>Anxiety score: {{ $data['anxiety'] }}</h3><h4>You have {{ $data['alevel'] }}.</h4>
            <h3>Depression Score: {{ $data['depression'] }}</h3><h4>You have {{ $data['dlevel'] }}.</h4>
            <br>
            <h4>Which of the following do you feel influenced your score on today's survey?</h4>
            <form method='POST' action='/store/{{$data['anxiety']}}/{{$data['depression']}}'>
                {{ csrf_field() }}
                @include('tagsCheckbox')
                <br>
                <input type='submit' value='Save Your Score' class='btn btn-primary btn-small'>
            </form>
        </div>
    </div>



@endsection
