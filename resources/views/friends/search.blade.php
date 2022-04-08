@extends('layouts.friends')
@section('content')
    {{Form::open(array('route' => 'friends.search','method' => 'get'))}}

@endsection