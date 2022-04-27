@extends('layouts.main')
@section('content')
        <div class="row">
                @foreach($parks as $park)
                        <div class="col">
                                <a href="{{route('parks.show',['name' => $park->name])}}">
                                        <img src="{{asset('img/NationalParks/'.$park->name)}}.png" alt="{{$park->name}}">
                                        <p>{{$park->name}}</p>
                                </a>
                        </div>
                @endforeach
        </div>
@endsection
