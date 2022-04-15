<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{route('trails.index')}}">Útvonalak</a>
    <a href="{{route('friends.index')}}">Barátok</a>
    <a href="{{route('home')}}">Főoldal</a>
    <a href="#"> @auth
            <form class="d-flex" action="{{route("auth.logout")}}" method="post" >
                @csrf
                <button class="btn btn-outline-light" type="submit">Kijelentkezés</button>
            </form>
        @endauth</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menü</span>
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