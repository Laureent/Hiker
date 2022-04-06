@extends('layouts.friends')
@section('title',"Barátok")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{Form::text('name', $value = old('name'))}}
                @foreach($friends as $friend)

                @endforeach
            </div>
        </div>
    </div>
@endsection