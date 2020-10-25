@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h2 py-5"> {{$total}} Usuarios registrados</p>
    <p class="h3">
        Click <a href="{{route('users.excel')}}">Aqui </a>
        para descargar en Excel los usuarios
    </p>

    {{-- <form action="{{route('users.import.excel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(Session::has('message'))
            <p>{{Session::get('message')}}</p>
        @endif

        <input type="file" name="file">
        <input type="submit" class="btn btn-primary" value="Importar excel">
    </form> --}}
</div>
@endsection
