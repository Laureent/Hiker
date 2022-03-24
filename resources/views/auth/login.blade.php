@extends('layouts.Auth')
@section('title')
    -bejelentkezés
@endsection
@section('content')
    <div id="main">
        <form>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 login-form" style="display: grid; grid-template-rows: auto;">
                <h1>Bejelentkezés</h1>
                <img id="Logo" src="Hiker_Logo_Beige.png" alt="logo">
                <label for="User">Felhasználónév</label>
                <input type="text" id="User"   class="form-control" placeholder="Felhasználónév">
                <label for="pass">Jelszó</label>
                <input type="password" id="pass" placeholder="Jelszó" class="form-control">
                <button  type="submit" id="submit" class="btn btn-success">Button</button>
            </div>
            <div class="col-2"></div>
        </div>
        </form>
    </div>



@endsection