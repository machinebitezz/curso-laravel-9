@extends('layouts.app')

@section('title', $user->name)

@section('content')
  <h1>Listagem do usuário {{ $user->name }}</h1>

  <ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->created_at }}</li>
  </ul>

  <form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
  </form>

  <a href="{{ route("users.edit", $user->id) }}">Editar</a>
  <a href="{{ route("users.index") }}">Voltar</a>
@endsection