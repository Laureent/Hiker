@extends('layouts.main')
@section('title',"Útvonal módosítás")
@section('content')
    <div id="CreateFormRow" class="div">
        <div id="CreateFormCol" class="col-12">
            {!! Form::open(['method'=>'put','route' => ['admin.update.store','id' => $trail->id]]) !!}
            {{Form::label('place','Helység neve',['class'=>'label'])}}
            {{Form::text('place', $value = old('place'), $attributes = ["class"=>"form-control"])}}
        </div>
        <div id="CreateFormCol" class="col-12">
            {{Form::label('length','Az útvonal hossza',['class'=>'label'])}}
            {{Form::text('length', $value = old('length'), $attributes = ["class"=>"form-control"])}}
        </div>
        <div id="CreateFormCol" class="col-12">
            {{Form::label('difficulty','Az útvonal nehézsége',['class'=>'label'])}}
            {{Form::select('difficulty', array('Könnyű' => 'Könnyű','Közepes' => 'Közepes','Nehéz' => 'Nehéz',),$attributes = ["class"=>"form-control", 'selected' => ($trail->difficulty)])}}
        </div>
        <div id="CreateFormCol" class="col-12">
            {{Form::label('description','Az útvonal leírása',['class'=>'label'])}}
            {{Form::text('description', $value = old('description'), $attributes = ["class"=>"form-control"])}}
        </div>
        <div id="CreateFormCol" class="col-12">
            {{Form::label('nationalpark','Nemzeti park',['class'=>'label'])}}
            {{Form::text('nationalpark', $value = old('nationalpark'), $attributes = ["class"=>"form-control"])}}
        </div>
        <div id="CreateFormCol" class="col-12">
            {{Form::label('map','Google map link',['class'=>'label'])}}
            {{Form::text('map', $value = old('map'), $attributes = ["class"=>"form-control"])}}
        </div>
        <div id="CreateFormCol" class="col-12">
            {{Form::submit('Módosítás', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
            @if(session()->has('success'))
                <p>{{session('success')}}</p>
            @endif
        </div>
    </div>
@endsection