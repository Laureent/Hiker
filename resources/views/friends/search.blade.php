@extends('layouts.friends')
@section('title',"Barát keresés")
@section('content')
    <nav aria-label="...">
        <ul class="pagination pagination-sm">
            <li>
            <a class="page-link" href="{{url('/friends')}}">Barátaim</a>
            </li>
            <li  class="page-item active" aria-current="page">
                <span class="page-link">Barátok keresése</span>
            </li>
        </ul>
    </nav>
    <div class="searchbar">
        <input type="text" id="name" placeholder="Keresés...">
        <button class="btn" id="search" onclick="getName()">&#128269;</button>
    </div>
    @foreach($user->friend_requests() as $requests)

    @endforeach
@endsection
@section('script')
    <script>
        function getName(){
            data = fetch('http://localhost:8881/api/friends/search/' + document.getElementById('name').value);
        }
    </script>
@endsection