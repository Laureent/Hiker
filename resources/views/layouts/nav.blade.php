<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a href="{{route('home')}}" onclick="">Főoldal</a>
    <a href="{{route('trails.index')}}">Útvonalak</a>
    @if($user->admin == 1)
        <a href="{{route('admin.create')}}">Hozzáadás</a>
    @endif
    <a href="{{route('parks.list')}}">Nemzeti Parkok</a>
    <a href="{{route('friends.index')}}">Barátok</a>
    <a href="#"> @auth
            <form class="d-flex" action="{{route("auth.logout")}}" method="post" >
                @csrf
                <button class="btn btn-outline-light"  type="submit">Kijelentkezés</button>
            </form>
        @endauth</a>
</div>
<div class="nav">
    <span class="icon" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menü</span>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>