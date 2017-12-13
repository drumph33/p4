@extends('layouts.app')

@section('title')
    Anxiety and Depression Results
@endsection

@section('content')
    <div class='container'>
        <div class='panel-body'>
            <h3>Anxiety score: {{ $data['anxiety'] }}
            <br>
            Depression Score is {{ $data['depression'] }}</h3>
            <br>
            <h5>Which of the following do you feel influenced your score on today's survey?</h5>
            <br>
            @include('tagsCheckbox')

            <form method='POST' action='/store/{{$data['anxiety']}}/{{$data['depression']}}'>
                {{ csrf_field() }}
                <input type='submit' value='Save Your Score' class='btn btn-primary btn-small'>
            </form>
        </div>
    </div>



@endsection
