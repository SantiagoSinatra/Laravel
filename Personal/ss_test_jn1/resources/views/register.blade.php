@extends('layouts.default') {{-- le digo que agarre el layout que programe anteriormente --}}

@section('content')

    <form action="{{ url('/registro') }}" method="post">

        <ul>
            @forelse ($errors->all() as $error)
                <li>{{$error}}</li>
            @empty
            @endforelse
        </ul>

        @csrf {{-- esto hace que el formulario acepte metodos post --}}

        <div>
            <input name="name" type="text" placeholder="ingrese su nombre">
        </div>

        <div>
            <input name="email" type="email" placeholder="ingrese su email">
        </div>

        <div>
            <input name="pass" type="password" placeholder="ingrese una contraseña">
        </div>

        <div>
            <button type="submit">registrarse</button>
        </div>

    </form>

@endsection
