@extends('layouts.semantic')

@section('title')
Editar Playlists
@endsection

@section('content')
<form action="{{route('playlists.update', $playlist->id)}}" method="POST" class="ui form">
    @csrf
    @method('PUT')

    <div class="field">
        <strong>Descrição:</strong>
        <input type="text" name="descricao" id="descricao" value="{{ $playlist->descricao }}">
    </div>
    <div class="field">
        <strong>Usuário:</strong>
        <select name="user" id="user">
            @foreach ($users as $user)
            <option value="{{$user->id}}" @if($user->id == $playlist->user->id) selected @endif>{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="ui blue button right floated">Editar</button>
</form>

@endsection