@extends('layouts.main')
@section('title',"Útvonalak")
@section('content')
    @include('layouts.back')
    @foreach($trails as $trail)
        <div class="result">
            <div class="row">
                <div  id="card_result_pic" class="col-6">
                    <img src="{{asset("img/Trails/".$trail->img)}}" id="result_pic" class=" img-fluid rounded-start" alt="{{$trail->img}}">
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
@section('script')

@endsection