@extends('layouts.app')

@section('title')
    Anxiety and Depression Results
@endsection

@section('content')
    <div class='container'>
        <div class='panel-body'>
            <h3><span class="bold-title">Anxiety score:</span> {{ $data['anxiety'] }}</h3>
            <h4 class="anx-desc">You have {{ $data['alevel'] }}.</h4>
            <h3><span class="bold-title">Depression Score:</span> {{ $data['depression'] }}</h3>
            <h4 class="dep-desc">You have {{ $data['dlevel'] }}.</h4>
            <br>
            <h4>Which of the following do you feel influenced your score on today's survey?</h4>
            <form method='POST' action='/store'>
                {{ csrf_field() }}
                @include('tagsCheckbox')
                <br>
                <input name='anxiety' type='hidden' value={{$data['anxiety']}}>
                <input name='depression' type='hidden' value={{$data['depression']}}>
                <input name='alevel' type='hidden' value={{$data['alevel']}}>
                <input name='dlevel' type='hidden' value={{$data['dlevel']}}>
                <input type='submit' value='Save Your Score' class='btn btn-primary btn-small save-btn'>
            </form>
        </div>
    </div>



@endsection
