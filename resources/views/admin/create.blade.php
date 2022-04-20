@extends('layouts.main')
@section('title',"Útvonal hozzáadás")
@section('content')
    {!! Form::open(['route' => 'admin.store']) !!}
    {{Form::label('place','Helység neve',['class'=>'label'])}}
    {{Form::text('place', $value = old('place'), $attributes = ["class"=>"form-control"])}}
    {{Form::label('lenght','Az útvonal hossza',['class'=>'label'])}}
    {{Form::email('lenght', $value = old('lenght'), $attributes = ["class"=>"form-control"])}}
    {{Form::label('difficulty','Az útvonal nehézsége',['class'=>'label'])}}
    {{Form::email('difficulty', $value = old('lenght'), $attributes = ["class"=>"form-control"])}}
    {{Form::label('description','Az útvonal leírása',['class'=>'label'])}}
    {{Form::email('description', $value = old('description'), $attributes = ["class"=>"form-control"])}}
    {{Form::label('img','A kép fájl neve',['class'=>'label'])}}
    {{Form::email('img', $value = old('img'), $attributes = ["class"=>"form-control"])}}
    {{Form::label('map','Google map link',['class'=>'label'])}}
    {{Form::email('map', $value = old('map'), $attributes = ["class"=>"form-control"])}}
    {{Form::submit('Hozzáadás', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection