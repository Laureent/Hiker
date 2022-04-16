@extends('layouts.friends')
@section('title',"Barátaid")
@section('content')
    @include('layouts.back')
    <nav aria-label="...">
        <ul class="pagination pagination-sm">
            <li class="page-item active" aria-current="page">
                <span class="page-link">Barátaim</span>
            </li>
            <li class="page-item"><a class="page-link" href="{{url('/friends/search')}}">Barátok keresése</a></li>
        </ul>
    </nav>


        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($user->friends as $friend)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$friend->name}}</h5>
                            <button class="btn btn-danger" onclick="deleteFriend()">Törlés</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
@section('script')
    <script>
        function deleteFriend(id) {

        }
    </script>
@endsection