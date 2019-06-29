@extends('admin.layouts.layout')
@section('content')
    <h3>Előtag</h3>

    <form action="admin.properties.store-prefix" method="POST">
        {{ Csrf_field() }}
        <label for="prefix-creator">Új Előtag rögzítése</label>
        <input type="text" id="prefix-creator" name="name" value="{{ old('name') }}">
        <button type="submit">Feltöltés</button>
    </form>
    <ul>
        @foreach ($prefixies as $prefix )
            <form action="admin.properties.store-prefix" method="POST">
                {{ Csrf_field() }}
                <input type="text" name="name" value="{{ $prefix->name }}">
                <button type="submit">Módosítás</button>
            </form>
        @endforeach
    </ul>

@stop