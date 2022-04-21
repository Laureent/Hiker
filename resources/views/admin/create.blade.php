@extends('layouts.main')
@section('title',"Útvonal hozzáadás")
@section('content')
    {!! Form::open(['route' => 'admin.store','method'=>'post']) !!}
    {{Form::label('place','Helység neve',['class'=>'label'])}}
    {{Form::text('place', $value = old('place'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('length','Az útvonal hossza',['class'=>'label'])}}
    {{Form::text('length', $value = old('length'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('difficulty','Az útvonal nehézsége',['class'=>'label'])}}
    {{Form::text('difficulty', $value = old('lenght'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('description','Az útvonal leírása',['class'=>'label'])}}
    {{Form::text('description', $value = old('description'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('img','A kép fájl neve kiterjesztéssel',['class'=>'label'])}}
    {{Form::text('img', $value = old('img'), $attributes = ["class"=>"form-control"])}}

    {{Form::label('map','Google map link',['class'=>'label'])}}
    {{Form::text('map', $value = old('map'), $attributes = ["class"=>"form-control"])}}

    {{Form::submit('Hozzáadás', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    @if(session()->has('success'))
        <p>{{session('success')}}</p>
    @endif
@endsection
@section('js')
    <script>
        function storeTrail(){
            data = {
                'place': document.getElementById('place').value,
                'length': document.getElementById('place').value,
                'difficulty': document.getElementById('place').value,
                'description': document.getElementById('place').value,
                'img': document.getElementById('place').value,
                'map': document.getElementById('place').value,
            }

            fetch({{route('admin.store')}},{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            }).then(response => alert("Elküldve"))
        }
    </script>
@endsection