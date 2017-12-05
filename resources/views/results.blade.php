@extends('layouts.master')

@section('title')
    Anxiety and Depression Surveys
@endsection

@section('content')
    Your anxiety score is {{ $data['anxiety'] }}
    Your depression score is {{ $data['depression'] }}
@endsection
