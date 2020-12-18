@extends('layouts.semantic')

@section('content')
<div class="ui centered inverted card">
    <div class="image">
        <img src="https://semantic-ui.com/images/avatar2/large/kristy.png">
    </div>
    <div class="content">
        <a class="header">{{$user->name}}</a>

        <div class="description">
            {{$user->email}}
        </div>
    </div>
    <div class="extra content">
        <a>
            <i class="user icon"></i>
            22 Friends
        </a>
    </div>
</div>
@endsection