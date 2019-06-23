@extends('layouts.layout')
@section('content')
    <table>
        <a href="{{ route('soldiers.create') }}">Új rekord hozzáadása</a>
        <tr>
            <th>ID</th>
            <th>Előtag</th>
            <th>Vezetéknév</th>
            <th>Keresztnév</th>
            <th>Állománycsoport</th>
            <th></th>
        </tr>
        @foreach ($soldiers as $soldier)    
            <tr>
                <td>{{ $soldier->id }}</td>
                <td>{{ $soldier->prefix }}</td>
                <td>{{ $soldier->last_name }}</td>
                <td>{{ $soldier->first_name }}</td>
                <td>{{ $soldier->group }}</td>
                <td class="cell_bnt">
                    <form action="{{ route('soldiers.destroy', ['soldierId' => $soldier->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit">Törlés</button>
                    </form>
                    &nbsp;-||-&nbsp;
                    <a href="{{ route('soldiers.edit', ['soldierId' => $soldier->id]) }}">
                        Módosítás
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@stop