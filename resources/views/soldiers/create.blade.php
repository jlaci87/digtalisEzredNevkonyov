@extends('layouts.layout')
@section('content')
    <form action="{{ route('soldiers.store') }}" method="POST">
        {{ csrf_field() }} 
        <label for="prefix">Előtag:</label>
        <input type="text" id="prefix" name="prefix" value="{{ old('prefix') }}">
        <br>
        <br>
        <label for="lastname">Vezetéknév:</label>
        <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}">
        <br>
        <br>
        <label for="firstname">Keresztnév:</label>
        <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}">
        <br>
        <br>
        <label for="group">Állománycsoport:</label>
        <input type="text" id="group" name="group" value="{{ old('group') }}">
        <br>
        <br>
        <button type="submit">Feltöltés</button>
    </form>
@stop