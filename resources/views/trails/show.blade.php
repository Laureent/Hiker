@extends('layouts.main')
@section('title',$trail->place)
@section('content')
    @include('layouts.back')
    <div>
        <h1 id="TrailShowTitle">{{$trail->place}}</h1>
        <div class="TrailShowPic">
            @if($trail->img == null)
                <img id="TrailShowDefaultPic" src="{{asset('img/Trails/placeholder.jpg')}}" alt="placeholder">

            @else
                <img src="{{asset('img/Trails/'.$trail->img)}}" alt="{{$trail->img}}">
            @endif
        </div>

        @if($user->admin == 1)
                <button onclick="window.location.href='{{route('admin.image',['id' => $trail->id])}}'">Kép hozzáadás</button>
                <button onclick="window.location.href='{{route('admin.image.delete',['id' => $trail->id])}}'">Kép eltávolítása</button>
            @endif
        <h3>{{$trail->place}}</h3>
        <ul>
            <li>Túra hossza: {{$trail->length}} km</li>
            <li>Túra nehézsége: {{$trail->difficulty}}</li>
        </ul>
        <h4>Leírás:</h4>
        <p>{{$trail->description}}</p>

        <iframe src="{{$trail->map}}"></iframe>
            @if($user->admin == 1)
                <button onclick="window.location.href='{{route('admin.destroy',['id' => $trail->id])}}'">Útvonal törlése</button>
            @endif
    </div>
@endsection