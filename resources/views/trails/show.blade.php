@extends('layouts.main')
@section('title',$trail->place)
@section('content')
    <div>
        <h1 id="TrailShowTitle">{{$trail->place}}</h1>
        <div class="TrailShowPic">
            @if($trail->img == null)
                <img class="img img-fluid" id="TrailShowDefaultPic" src="{{asset('img/Trails/placeholder.jpg')}}" alt="placeholder">

            @else
                <img class="img img-fluid" src="{{asset('img/Trails/'.$trail->img)}}" alt="{{$trail->img}}">
            @endif
        </div>

        @if($user->admin == 1)
            <div class="TrailShowPicAdmin">
                <div class="row">
                    <div class="col-6">
                        <button id="TrailShowBtn" onclick="window.location.href='{{route('admin.image',['id' => $trail->id])}}'">Kép hozzáadás</button>
                    </div>
                    <div class="col-6">
                        <button id="TrailShowBtn" onclick="window.location.href='{{route('admin.image.delete',['id' => $trail->id])}}'">Kép eltávolítása</button>
                    </div>
                </div>
            </div>
            @endif
        <h3>{{$trail->place}}</h3>
        <ul>
            <li>Túra hossza: {{$trail->length}} km</li>
            <li>Túra nehézsége: {{$trail->difficulty}}</li>
            <li>elhelyezkedés(Nemzeti Park): {{$trail->nationalpark}}</li>
        </ul>
        <h4>Leírás:</h4>
        <p>{{$trail->description}}</p>

        <iframe src="{{$trail->map}}"></iframe>

            @if($user->admin == 1)
                <div class="TrailShowPicAdmin">
                    <div class="row">
                        <div class="col-6">
                            <button id="TrailShowBtn" onclick="window.location.href='{{route('admin.update',['id' => $trail->id])}}'">módosítás</button>
                        </div>
                        <div class="col-6">
                            <button id="TrailShowBtn" onclick="window.location.href='{{route('admin.destroy',['id' => $trail->id])}}'">törlés</button>
                        </div>
                    </div>
                </div>
            @endif
    </div>
@endsection