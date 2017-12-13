@extends('layouts.app')

@section('title')
    Anxiety and Depression Score Edit
@endsection


@section('content')
    @if ($errors->any())
    <div class='container'>
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class='container'>
        <div class='panel-body'>
            <h3>Would you like to edit the influencers related to this score?</h3> <br>
            <h4>Date taken:  {{ $scores->created_at->format('m-d-y') }} <br>
            <br>Anxiety score: {{ $scores->anxiety }}
            <br>
            Depression score: {{ $scores->depression }}
            <br>
            </h4>

            <form method='POST' action='/edit/{{ $scores->id }}'>
                {{ method_field('put') }}
                {{ csrf_field() }}
                <div class='form-group'>
                    <label for='anxiety'> New Anxiety Score (0-99): </label>
                    <input type='number' name='anxiety' min='0' max='99' id='anxiety'>
                </div>
                <div class='form-group'>
                    <label for='depression'> New Depression Score (0-45): </label>
                    <input type='number' name='depression' min='0' max='99' id='depression'>
                </div>

                <h4>Influencers: </h4><br>

                @include('tagsCheckbox')

                <br>
                <div class='form-group'>
                <input type='submit' value='Edit This Score' class='btn btn-primary btn-small'>
                </div>
            </form>
        </div>
    </div>



@endsection
