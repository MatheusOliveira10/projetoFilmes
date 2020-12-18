@extends('layouts.semantic')

@section('title')
Listagem de Usuários
@endsection

@section('content')
<table class="ui celled table inverted">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Criado Em</th>
            <th>Modificado Em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                <a class="ui blue button" href="{{ route('users.show',$user->id) }}">
                    <i class="fa fa-eye"></i>
                </a>
                <a class="ui green button" href="{{ route('users.edit',$user->id) }}">
                    <i class="fa fa-pen"></i>
                </a>
                <form action={{route('users.destroy', $user->id)}} method="POST" style="display: inline">
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