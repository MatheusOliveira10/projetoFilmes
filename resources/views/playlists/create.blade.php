@extends('layouts.semantic')

@section('title')
Criar Novo Usuário
@endsection

@section('content')
<form action="{{route('playlists.store')}}" method="POST" class="ui form">
    @csrf

    <div class="field">
        <strong>Descrição:</strong>
        <input type="text" name="descricao" id="descricao">
    </div>
    <div class="field">
        <strong>Usuário:</strong>
        <select name="user" id="user">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="ui blue button">Criar</button>
</form>

<script>
    $('.ui.dropdown').dropdown()
</script>
@endsection