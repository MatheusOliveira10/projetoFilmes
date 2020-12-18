@extends('layouts.semantic')

@section('title')
Criar Novo Usuário
@endsection

@section('content')
<form action="{{route('users.store')}}" method="POST" class="ui form">
    @csrf
    
    <div class="field">
        <strong>Nome:</strong>
        <input type="text" name="name" id="name">
    </div>
    <div class="field">
        <strong>E-Mail:</strong>
        <input type="text" name="email" id="email">
    </div>
    <div class="field">
        <strong>Senha:</strong>
        <input type="password" name="password" id="password">
    </div>

    <button type="submit" class="ui blue button">Criar</button>
</form>

@endsection