@extends('layouts.main')
@section('content')
    <h1>ASDASd</h1>
    @auth
                    <form class="d-flex" action="{{route("auth.logout")}}" method="post" >
                        @csrf
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Kijelentkezés</button>
                    </form>
    @endauth
@endsection
