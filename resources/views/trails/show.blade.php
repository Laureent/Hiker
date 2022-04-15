@extends('layouts.main')
@section('title',$trail->place)
@section('content')
    <div>
        <p>{{$trail->place}}</p>
        <p>{{$trail->lenght}}</p>
        <p>{{$trail->difficulty}}</p>
        <p>{{$trail->description}}</p>
        <iframe src="{{$trail->map}}"></iframe>
    </div>
@endsection