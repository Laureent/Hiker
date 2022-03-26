@extends('layouts.main')
@section('content')
    <nav class="navbar navbar-custom navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    @auth
                            <form class="d-flex" action="{{route("auth.logout")}}" method="post" >
                                @csrf
                                <button class="btn btn-outline-light" type="submit">Kijelentkezés</button>
                            </form>
                        @endauth
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="card">
            <div class="card-header">

                <img id="profile_picture"  src="Hiker_Logo_beige.png" alt="">
                <h5 id="Username">Ember név</h5>
            </div>
            <div class="card-body">

                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Feugiat nisl pretium fusce id velit ut tortor. Nam at lectus urna duis convallis convallis tellus. Id eu nisl nunc mi ipsum. Ut porttitor leo a diam. Luctus venenatis lectus magna fringilla urna porttitor. Ultricies lacus sed turpis tincidunt. Tortor at auctor urna nunc id cursus metus. Eget arcu dictum varius duis at consectetur. Nulla malesuada pellentesque elit eget gravida.</p>
                <div class="pictures">
                    <img id="kep"src="kép.png" class="card-img-bottom" alt="...">
                    <img id="kep2"src="kép.png" class="card-img-bottom" alt="...">
                    <img id="kep3"src="kép.png" class="card-img-bottom" alt="...">
                </div>

                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

        </div>
    </div>


@endsection
