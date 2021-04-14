@extends('layout.app')
@section('title', 'Clientes | Añadir Cliente')
@section('header', 'Añadir Cliente')
@section('subtitle', '')

@section('content')
    <a href="{{ route('client.index')}}">Ver Todos</a>
    <br>
    <br>
    <form action="{{ route('client.store') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Nombre del cliente" value="{{ old('name') }}">
        @error('name')
            <span style="background: red; color: white; padding: 5px 10px;">El campo nombre es requerido</span>
        @enderror
        <br><br>

        <input type="text" name="last_name" placeholder="Apellido del cliente" value="{{ old('last_name') }}">

        @error('last_name')
            <span style="background: red; color: white; padding: 5px 10px;">El campo apellido es requerido</span>
        @enderror
        <br><br>

        <input type="text" name="identification" placeholder="Cédula del cliente" value="{{ old('identification') }}">
        @error('identification')
            <span style="background: red; color: white; padding: 5px 10px;">El campo cédula es requerido y debe ser único</span>
        @enderror
        <br><br>

        <input type="email" name="email" placeholder="Email del cliente" value="{{ old('email') }}">
        @error('email')
            <span style="background: red; color: white; padding: 5px 10px;">El campo email es requerido, debe tener un formato válido y ser único</span>
        @enderror
        <br><br>

        <input type="submit" value="Guardar datos">
    </form>
@endsection

