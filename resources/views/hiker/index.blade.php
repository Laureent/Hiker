@extends('layouts.main')
@section('content')
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#"> @auth
                <form class="d-flex" action="{{route("auth.logout")}}" method="post" >
                    @csrf
                    <button class="btn btn-outline-light" type="submit">Kijelentkezés</button>
                </form>
                @endauth</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menü</span>


    <div class="container">
        <div class="card">
            <div class="card-header">

                <img id="profile_picture"  src="Hiker_Logo_beige.png" alt="">
                <h5 id="Username">Ember név</h5>
            </div>
            <div class="card-body">

                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Feugiat nisl pretium fusce id velit ut tortor. Nam at lectus urna duis convallis convallis tellus. Id eu nisl nunc mi ipsum. Ut porttitor leo a diam. Luctus venenatis lectus magna fringilla urna porttitor. Ultricies lacus sed turpis tincidunt. Tortor at auctor urna nunc id cursus metus. Eget arcu dictum varius duis at consectetur. Nulla malesuada pellentesque elit eget gravida.</p>
                <div class="row">
                    <div class="col-6">
                        <img src="kép.png" class="card-img-bottom" alt="...">
                    </div>
                    <div class="col-6" id="stacked">
                        <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                        <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                        <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                        <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                    </div>

                </div>

                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>

            <div class="card">
                <div class="card-header">

                    <img id="profile_picture"  src="Hiker_Logo_beige.png" alt="">
                    <h5 id="Username">Ember név</h5>
                </div>
                <div class="card-body">

                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Feugiat nisl pretium fusce id velit ut tortor. Nam at lectus urna duis convallis convallis tellus. Id eu nisl nunc mi ipsum. Ut porttitor leo a diam. Luctus venenatis lectus magna fringilla urna porttitor. Ultricies lacus sed turpis tincidunt. Tortor at auctor urna nunc id cursus metus. Eget arcu dictum varius duis at consectetur. Nulla malesuada pellentesque elit eget gravida.</p>
                    <div class="row">
                        <div class="col-6">
                            <img src="kép.png" class="card-img-bottom" alt="...">
                        </div>
                        <div class="col-6" id="stacked">
                            <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                            <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                            <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                            <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                        </div>

                    </div>

                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>

                <div class="card">
                    <div class="card-header">

                        <img id="profile_picture"  src="Hiker_Logo_beige.png" alt="">
                        <h5 id="Username">Ember név</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Feugiat nisl pretium fusce id velit ut tortor. Nam at lectus urna duis convallis convallis tellus. Id eu nisl nunc mi ipsum. Ut porttitor leo a diam. Luctus venenatis lectus magna fringilla urna porttitor. Ultricies lacus sed turpis tincidunt. Tortor at auctor urna nunc id cursus metus. Eget arcu dictum varius duis at consectetur. Nulla malesuada pellentesque elit eget gravida.</p>
                        <div class="row">
                            <div class="col-6">
                                <img src="kép.png" class="card-img-bottom" alt="...">
                            </div>
                            <div class="col-6" id="stacked">
                                <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                                <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                                <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                                <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                            </div>

                        </div>

                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>

                    <div class="card">
                        <div class="card-header">

                            <img id="profile_picture"  src="Hiker_Logo_beige.png" alt="">
                            <h5 id="Username">Ember név</h5>
                        </div>
                        <div class="card-body">

                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Feugiat nisl pretium fusce id velit ut tortor. Nam at lectus urna duis convallis convallis tellus. Id eu nisl nunc mi ipsum. Ut porttitor leo a diam. Luctus venenatis lectus magna fringilla urna porttitor. Ultricies lacus sed turpis tincidunt. Tortor at auctor urna nunc id cursus metus. Eget arcu dictum varius duis at consectetur. Nulla malesuada pellentesque elit eget gravida.</p>
                            <div class="row">
                                <div class="col-6">
                                    <img src="kép.png" class="card-img-bottom" alt="...">
                                </div>
                                <div class="col-6" id="stacked">
                                    <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                                    <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                                    <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                                    <img id="pics" src="kép.png" class="card-img-bottom" alt="...">
                                </div>

                            </div>

                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>

        </div>
    </div>




@endsection
@section('js')
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
@endsection
