@extends('layout.app')
@section('title', 'Clientes | General')
@section('header', 'Lista de clientes')
@section('subtitle', 'Vista general de clientes registrados en el sistema')

@section('content')
    <a href="{{ route('client.create')}}">Añadir Cliente</a>
    <br>
    <br>
    <table>
        <tr>
            <th>#</th>
            <th colspan="2">Nombre y Apellido</th>
            <th>Cédula</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        @php
            $i = 1; //Variable para numerar clientes
        @endphp
        @foreach ($clients as $client)
            <tr>
                <td>{{ $i }}</td>
                <td colspan="2">{{ $client->name . " " . $client->last_name}}</td>
                <td>{{ $client->identification}}</td>
                <td>{{ $client->email}}</td>
                <td>
                    <a href="{{ route('client.edit', $client) }}"> Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

