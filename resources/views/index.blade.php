@extends('layouts.welcome')
@section('content')

    <div id="panel" class="row">
        <div  class="col-12">
            <h3>Üdvözli önt a</h3>
        </div>
        <div id="WelcomeLogo" class="col-12">
            <img class="logo" src="img/Logos/Hiker_Logo_Beige.png" alt="Logo">
        </div>
        <div id="buttons" class="col-12">
            <a href="{{route('auth.login')}}"><button>Bejelentkezés</button></a>
            <a href="{{route('register.create')}}"><button>Regisztráció</button></a>
        </div>
    </div>
@endsection