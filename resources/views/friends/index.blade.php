@extends('layouts.main')
@section('title',"Barátok")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($user->friends as $friend)
                    <p>{{$friend->name}}
                    <button onclick="deleteFriend()">Törlés</button>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function deleteFriend(id) {

        }
    </script>
@endsection