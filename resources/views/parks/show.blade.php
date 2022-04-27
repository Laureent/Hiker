@extends('layouts.main')
@section('title',$title)
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