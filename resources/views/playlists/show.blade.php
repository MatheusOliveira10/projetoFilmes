@extends('layouts.semantic')

@section('content')
<div class="ui centered inverted card">
    <div class="image">
        <img src="https://semantic-ui.com/images/avatar2/large/kristy.png">
    </div>
    <div class="content">
        <a class="header">{{$playlist->descricao}}</a>

        <div class="description">
            {{$playlist->user->name}}
        </div>
    </div>
    <div class="extra content">
        <a>
            <i class="clock icon"></i>
            {{Carbon\Carbon::parse($playlist->created_at)->format('d/m/Y h:m:s')}}
        </a>
    </div>
</div>
@endsection