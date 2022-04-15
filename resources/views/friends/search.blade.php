@extends('layouts.friends')
@section('content')
    <div>
        <input type="text" id="name">
        <button class="btn btn-success" id="search" onclick="getName()">Keresés</button>
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