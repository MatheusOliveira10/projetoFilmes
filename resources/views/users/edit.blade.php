@extends('layouts.semantic')

@section('title')
Editar Usuário
@endsection

@section('content')
<form action="{{route('users.update', $user->id)}}" method="POST" class="ui form">
    @csrf
    @method('PUT')

    <div class="field">
        <strong>Nome:</strong>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
    </div>
    <div class="field">
        <strong>E-Mail:</strong>
        <input type="text" name="email" id="email" value="{{ $user->email }}">
    </div>
    <div class="field">
        <strong>Senha:</strong>
        <input type="password" name="password" id="password">
    </div>

    <button type="submit" class="ui blue button right floated">Editar</button>
</form>

@endsection