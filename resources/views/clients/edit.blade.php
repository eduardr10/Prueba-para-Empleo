@extends('layout.app')
@section('title', 'Clientes | Editar Cliente')
@section('header', 'Editar Cliente')
@section('subtitle', '')

@section('content')
    <a href="{{ route('client.index')}}">Ver Todos</a>
    <br>
    <br>
    <form action="{{ route('client.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Nombre del cliente" value="{{ $client->name }}">
        @error('name')
            <span style="background: red; color: white; padding: 5px 10px;">El campo nombre es requerido</span>
        @enderror
        <br><br>

        <input type="text" name="last_name" placeholder="Apellido del cliente" value="{{ $client->last_name }}">

        @error('last_name')
            <span style="background: red; color: white; padding: 5px 10px;">El campo apellido es requerido</span>
        @enderror
        <br><br>

        <input type="text" name="identification" placeholder="Cédula del cliente" value="{{ $client->identification }}">
        @error('identification')
            <span style="background: red; color: white; padding: 5px 10px;">El campo cédula es requerido y debe ser único</span>
        @enderror
        <br><br>

        <input type="email" name="email" placeholder="Email del cliente" value="{{ $client->email }}">
        @error('email')
            <span style="background: red; color: white; padding: 5px 10px;">El campo email es requerido, debe tener un formato válido y ser único</span>
        @enderror
        <br><br>

        <input type="submit" value="Modificar datos">
    </form>
    <form action="{{ route('client.destroy', $client) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Eliminar datos">
    </form>
@endsection

