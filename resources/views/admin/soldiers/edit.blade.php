@extends('admin.layouts.layout')
@section('content')
    <form action="{{ route('admin.soldiers.update', [
            'soldierId' => $soldier->id,
            'order_by' => request()->input('order_by'),
            'direction' => request()->input('direction')
        ])}}" 
        method="POST">
        {{ csrf_field() }} 
        <input type="hidden" name="_method" value="put">
        <label for="prefix">Előtag:</label>
        <input type="text" id="prefix" name="prefix" value="{{ $soldier->prefix }}">
        <br>
        <br>
        <label for="lastname">Vezetéknév:</label>
        <input type="text" id="lastname" name="lastname" value="{{ $soldier->last_name }}">
        <br>
        <br>
        <label for="firstname">Keresztnév:</label>
        <input type="text" id="firstname" name="firstname" value="{{ $soldier->first_name }}">
        <br>
        <br>
        <label for="group">Állománycsoport:</label>
        <input type="text" id="group" name="group" value="{{ $soldier->group }}">
        <br>
        <br>
        <button type="submit">Módosítás</button>
    </form>
@stop
