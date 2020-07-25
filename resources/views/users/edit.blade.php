@extends('layouts.layout')
@section('title','修改用户')
@section('main')
    <h1>修改用户</h1>
    <form action="/users/{{ $user->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="name"></label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">

        <label for="password"></label>
        <input type="text" name="password" id="password" value="{{ $user->password }}">

        <button type="submit">提交</button>
    </form>
@endsection


