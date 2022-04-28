@extends('layouts.main')
@section('title',"Útvonalak")
@section('content')
<div id="TrailIndexSort">
    {!! Form::open(['route' => 'trails.index','method'=>'get']) !!}
    {{Form::label('difficulty',"Túra nehézségi szintjének kiválasztása:",['class'=>'label'])}}
    {{Form::select('difficulty',array('Összes' => 'Összes','Könnyű' => 'Könnyű','Közepes' => 'Közepes','Nehéz' => 'Nehéz'),$attributes = ["class"=>"form-control"])}}
    {{Form::submit('Szűrés', ['class' => 'btn btn-success'])}}
    {!! Form::close()!!}
</div>
    @if(session()->has('success'))
        <p>{{session('success')}}</p>
    @endif
    @foreach($trails as $trail)
        <div class="TrailIndexCard">

            <div  id="TrailIndexCardpicContainer">
                @if($trail->img == null)
                    <img src="{{asset("img/Trails/placeholder.jpg")}}" id="TrailIndexCardpic" class="img img-fluid" alt="placeholder">
                @else
                    <img src="{{asset("img/Trails/".$trail->img)}}" id="TrailIndexCardpic" class="img img-fluid" alt="{{$trail->img}}">
                @endif
            </div>
            <div id="TrailIndexCardContent">
                <h5 class="card-title">{{$trail->place}}</h5>
                <ul>
                    <li>Túra hossza: {{$trail->length}}Km</li>
                    <li>Túra nehézsége: {{$trail->difficulty}}</li>
                </ul>
                <a href="{{route('trails.show',$trail->id)}}"><button class="btn btn-success">Megtekintés</button></a>
            </div>

        </div>
    @endforeach
@endsection