@extends('layouts.main')
@section('title',"Képfeltöltés")
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        <img src="{{asset('img/Trails/'.Session::get('image'))}}">
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.image.store',['id' => $id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-4">
                <input type="file" class="form-control form-control-sm" name="image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
@endsection