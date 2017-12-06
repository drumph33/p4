@extends('layouts.app')

@section('title')
    Anxiety and Depression Results
@endsection

@section('content')
    Your anxiety score is {{ $data['anxiety'] }} 
    Your depression score is {{ $data['depression'] }}
@endsection
