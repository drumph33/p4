@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('alert'))
                        <div class="alert alert-info">
                            {{ session('alert') }}
                        </div>
                    @endif

                    <h4>Hello {{ Auth::user()->name }}!</h4>
                    <p>Click 'Take a survey' to complete an aseessment of your anxiety/depression.</p>
                    <form method='GET' action='/survey'>
                        <input type='submit' value='Take a survey' class='btn btn-primary btn-small take-survey'>
                    </form>
                    <p>Click 'Show my scores' to view the results of previous assessments.</p>
                    <form method='GET' action='/scores'>
                        <input type='submit' value='Show my scores' class='btn btn-primary btn-small view-scores'>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
