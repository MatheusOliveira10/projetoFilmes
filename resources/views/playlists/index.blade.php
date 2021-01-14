@extends('layouts.semantic')

@section('title')
Listagem de Playlists
@endsection

@section('content')
<table class="ui celled table inverted">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Dono</th>
            <th>Criado Em</th>
            <th>Modificado Em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($playlists as $playlist)
        <tr>
            <td>{{$playlist->id}}</td>
            <td>{{$playlist->descricao}}</td>
            <td>{{$playlist->user->name}}</td>
            <td>{{$playlist->created_at}}</td>
            <td>{{$playlist->updated_at}}</td>
            <td>
                <a class="ui blue button" href="{{ route('playlists.show',$playlist->id) }}">
                    <i class="fa fa-eye"></i>
                </a>
                <a class="ui green button" href="{{ route('playlists.edit',$playlist->id) }}">
                    <i class="fa fa-pen"></i>
                </a>
                <form action={{route('playlists.destroy', $playlist->id)}} method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ui red button">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection