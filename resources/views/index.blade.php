@extends('layouts.welcome')
@section('content')

    <div class="row">
        <h1>Üdvözli önt a</h1>
        <img class="logo" src="img/Logos/Hiker_Logo_Beige.png" alt="Logo">

        <a href="{{route('auth.login')}}"><button>Bejelentkezés</button></a>
        <a href="{{route('register.create')}}"><button>Regisztráció</button></a>
    </div>
    <div id="tabla">
        <img class="sing" src="img/Decoration/sign.png" alt="Sign_Decoration">
    </div>
@endsection