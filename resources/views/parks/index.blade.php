@extends('layouts.main')
@section('content')
        <div class="row">
                @foreach($parks as $park)
                        <div id="ParksIndexCol" class="col-md-6 col-sm-12">
                                <a href="{{route('parks.show',['name' => $park->name])}}">
                                        <img id="ParkLogoImage" src="{{asset('img/NationalParks/'.$park->name)}}.png" alt="{{$park->name}}">
                                </a>
                            <p>{{$park->name}}</p>
                        </div>
                @endforeach
        </div>
@endsection
