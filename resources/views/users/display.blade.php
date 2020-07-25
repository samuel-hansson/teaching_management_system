@extends('layouts.layout')
@section('title','显示用户')
@section('main')
    <h1>显示用户</h1>
    {{ $user->id }}
    <br>
    {{ $user->name }}
    <br>
    {{ $user->password }}
    <br>
    {{ $user->intro }}
@endsection


