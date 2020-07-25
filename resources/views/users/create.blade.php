@extends('layouts.layout')
@section('title','创建用户')
@section('main')
    <form action="/users" method="post">
        @csrf
        <div>
            <label for="name"></label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password"></label>
            <input type="text" name="password" id="password" value="{{ old('password') }}">
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>


        <button type="submit">提交</button>
    </form>
@endsection


