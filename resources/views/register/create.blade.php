@extends('layouts.Auth')
@section('title')
    - regisztráció
@endsection
@section('content')
    <section id="registration">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Regisztráció</h3>
                <img src="Hiker_Logo_Beige.png" alt="Logo">
                {!! Form::open(['route' => 'register.store']) !!}
                <div class="row mt-3">
                    <div class="col">
                        {{Form::label('name','Név',['class'=>'label'])}}
                        {{Form::text('name', $value = old('name'), $attributes = ["class"=>"form-control"])}}

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        {{Form::label('email','Email',['class'=>'label'])}}
                        {{Form::email('email', $value = old('email'), $attributes = ["class"=>"form-control"])}}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        {{Form::label('password',"Jelszó",['class'=>'label'])}}

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
                        {{Form::label('password_confirmation',"Jelszó mégegyszer",['class'=>'label'])}}
                        {{Form::password('password_confirmation', ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        {{Form::submit('Regisztráció', ['class' => 'btn btn-primary'])}}
                    </div>
                    <p>Van már fiókja?<a href="{{route('auth.login')}}">Itt be tud jelentkezni</a></p>
                </div>
                {!! Form::close() !!}

                @if($errors->any)
                    @foreach($errors->all() as $message)
                        <li>{{$message}}</li>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection