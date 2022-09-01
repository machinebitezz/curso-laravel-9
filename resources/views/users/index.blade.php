@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
  <h1>Listagem dos usuários</h1>

  <form action="#" method="get">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
  </form>  

  @foreach($users as $user)
    <li>
      {{ $user->name }} - {{ $user->email}}
      | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
      | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
    </li>
  @endforeach

  <a href="{{ route("users.create") }}">Novo usuário</a>
@endsection