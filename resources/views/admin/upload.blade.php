@extends('layouts.main')
@section('title',"Képfeltöltés")
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        <img id="TrailPicUpload" src="{{asset('img/Trails/'.Session::get('image'))}}" alt="Túra kép">
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Valami nem jó nézd meg mégegyszer, hogy biztos jót töétesz-e fel!
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('admin.image.store',['id' => $id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div id="TrailPicUploadBar" class="form-group row">
            <div class="col-sm-4">
                <input id="fileuploaderbar" type="file" class="form-control form-control-sm" name="image">
                <button  type="submit" class="btn btn-primary">Feltöltés</button>
            </div>

        </div>

    </form>
@endsection