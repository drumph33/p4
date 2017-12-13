@extends('layouts.app')

@section('title')
    Anxiety and Depression Results
@endsection

@section('content')
    <div class='container'>
        <div class='panel-body'>
            Your anxiety score is {{ $data['anxiety'] }}
            <br>
            Your depression score is {{ $data['depression'] }}
            <br>
            Which of the following do you feel influenced your score on today's survey?
            <br>
            @include('tagsCheckbox')

            <form method='POST' action='/store/{{$data['anxiety']}}/{{$data['depression']}}'>
                {{ csrf_field() }}
                <input type='submit' value='Save Your Score' class='btn btn-primary btn-small'>
            </form>
        </div>
    </div>



@endsection
