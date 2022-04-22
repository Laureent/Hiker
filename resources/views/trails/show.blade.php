@extends('layouts.main')
@section('title',$trail->place)
@section('content')
    @include('layouts.back')
    <div>
        @if($trail->img == null)
            <img src="{{asset('img/Trails/placeholder.jpg')}}" alt="placeholder">

        @else
            <img src="{{asset('img/Trails/'.$trail->img)}}" alt="{{$trail->img}}">
        @endif
        @if($user->admin == 1)
                <button onclick="window.location.href='{{route('admin.image',['id' => $trail->id])}}'">Kép hozzáadás</button>
                <button onclick="window.location.href='{{route('admin.image.delete',['id' => $trail->id])}}'">Kép eltávolítása</button>
            @endif
        <p>{{$trail->place}}</p>
        <p>{{$trail->lenght}}</p>
        <p>{{$trail->difficulty}}</p>
        <p>{{$trail->description}}</p>
        <iframe src="{{$trail->map}}"></iframe>
            @if($user->admin == 1)
                <button onclick="window.location.href='{{route('admin.destroy',['id' => $trail->id])}}'">Útvonal törlése</button>
            @endif
    </div>
@endsection