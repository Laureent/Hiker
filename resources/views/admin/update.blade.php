@extends('layouts.main')
@section('title',"Útvonal módosítás")
@section('content')
    {!! Form::open(['route' => ['admin.update.store','id' => $trail->id],'method'=>'put']) !!}
    {{Form::label('place','Helység neve',['class'=>'label'])}}
    {{Form::text('place', $value = old('place'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('length','Az útvonal hossza',['class'=>'label'])}}
    {{Form::text('length', $value = old('length'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('difficulty','Az útvonal nehézsége',['class'=>'label'])}}
    {{Form::select('difficulty',array('Könnyű' => 'Könnyű','Közepes' => 'Közepes','Nehéz' => 'Nehéz'),$attributes = ["class"=>"form-control"])}}

    {{Form::label('description','Az útvonal leírása',['class'=>'label'])}}
    {{Form::text('description', $value = old('description'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('nationalpark','Nemzeti park',['class'=>'label'])}}
    {{Form::text('nationalpark', $value = old('nationalpark'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('map','Google map link',['class'=>'label'])}}
    {{Form::text('map', $value = old('map'), $attributes = ["class"=>"form-control"])}}

    {{Form::submit('Módosítás', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    @if(session()->has('success'))
        <p>{{session('success')}}</p>
    @endif
@endsection