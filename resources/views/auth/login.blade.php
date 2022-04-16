@extends('layouts.Auth')
@section('title')
    - bejelentkezés
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <h3>Bejelentkezés</h3>
            <img src="img/Logos/Hiker_Logo_Beige.png" alt="Logo">
            {!! Form::open(['route' => 'authenticate', "class" =>"is-invalid"]) !!}



            <div class="row mt-3">
                <div class="col-12">
                    {{Form::label('email','Email:',['class'=>'label'])}}
                    {{Form::email('email', $value = old('email'), $attributes = ["class"=>"form-control"])}}
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    {{Form::label('password',"Jelszó:",['class'=>'label'])}}

                    @error('password')
                    {{Form::password('password', ['class' => 'form-control is-invalid'])}}
                    <div id="passwordFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @else
                        {{Form::password('password', ['class' => 'form-control'])}}
                        @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    {{Form::submit('Bejelentkezés', ['class' => 'btn btn-primary'])}}
                </div>
                <p class="pointer">Nincs még fiókja?<a href="{{route('register.create')}}"> Itt regisztráljon</a></p>
            </div>
            {!! Form::close() !!}

            @if($errors->any)
                @foreach($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            @endif
        </div>
    </div>
@endsection