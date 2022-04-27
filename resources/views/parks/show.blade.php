@extends('layouts.main')
@section('title',$park->name)
@section('header')
    <div class="ParkShowHeader">
        <div class="row">
            <div class="col-6" id="ParkShowHeaderTitle">
                <h3>{{$park->name}}</h3>
            </div>
            <div class="col-6" id="ParkShowHeaderLogo">
                <img src="{{asset("img/NationalParks/".$park->name)}}.png" alt="{{$park->name}} Logo">
            </div>
            <div class="col-12">
                <ul>
                    <li>Telefonszám: <a href="tel:{{$park->phone}}">{{$park->phone}}</a> </li>
                    <li>email cím: <a href="mailto:{{$park->email}}">{{$park->email}}</a> </li>
                    <li>webhely: <a href="{{$park->webpage}}">{{$park->webpage}}</a> </li>
                    <li>nyitvatartás: <p>{{$park->opening}}</p></li>
                </ul>
            </div>

        </div>
    </div>
@endsection

@section('content')



    @foreach($trails as $trail)
        <div class="result">
            <div class="row">
                <div  id="card_result_pic" class="col-6">
                    @if($trail->img == null)
                        <img src="{{asset("img/Trails/placeholder.jpg")}}" id="result_pic" class=" img-fluid rounded-start" alt="placeholder">
                    @else
                        <img src="{{asset("img/Trails/".$trail->img)}}" id="result_pic" class=" img-fluid rounded-start" alt="{{$trail->img}}">
                    @endif
                </div>
                <div id="card_result_content" class="col-6">
                    <h5 class="card-title">{{$trail->place}}</h5>
                    <ul>
                        <li>{{$trail->length}}</li>
                        <li>{{$trail->difficulty}}</li>
                    </ul>
                    <a href="{{route('trails.show',$trail->id)}}"><button class="btn btn-success">Megtekintés</button></a>
                </div>
            </div>
        </div>
    @endforeach
@endsection