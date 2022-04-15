@extends('layouts.main')
@section('title',"Útvonalak")
@section('content')
    @foreach($trails as $trail)
        <p>{{$trail->place}}</p>
        <a href="{{route('trails.show',$trail->id)}}">Megtekintés</a>
    @endforeach
@endsection
@section('script')

@endsection