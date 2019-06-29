@extends('layouts.layout')
@section('content')
    <table>
        <tr>
            <th>
                @if(request()->input('order_by') == 'id' && request()->input('direction') == 'desc')
                    <a href="{{route('soldiers.index', ['order_by' => 'id', 'direction' => 'asc'])}}">
                        ID
                    </a>
                @else
                    <a href="{{route('soldiers.index', ['order_by' => 'id', 'direction' => 'desc'])}}">
                        ID
                    </a>
                @endif
            </th>
            <th>
                @if(request()->input('order_by') == 'prefix' && request()->input('direction') == 'desc')
                    <a href="{{ route('soldiers.index', ['order_by' => 'prefix', 'direction' => 'asc']) }}">
                        Előtag
                    </a>
                @else
                    <a href="{{ route('soldiers.index', ['order_by' => 'prefix', 'direction' => 'desc']) }}">
                        Előtag
                    </a>
                @endif
            </th>
            <th>
                @if(request()->input('order_by') == 'last_name' && request()->input('direction') == 'desc')
                    <a href="{{ route('soldiers.index', ['order_by' => 'last_name', 'direction' => 'asc']) }}">
                        Vezetéknév
                    </a>
                @else
                    <a href="{{ route('soldiers.index', ['order_by' => 'last_name', 'direction' => 'desc']) }}">
                        Vezetéknév
                    </a>
                @endif
            </th>
            <th>
                @if(request()->input('order_by') == 'firstname' && request()->input('direction') == 'desc')
                    <a href="{{ route('soldiers.index', ['order_by' => 'first_name', 'direction' => 'asc']) }}">
                        Keresztnév
                    </a>
                @else
                    <a href="{{ route('soldiers.index', ['order_by' => 'first_name', 'direction' => 'desc']) }}">
                        Keresztnév
                    </a>
                @endif
            </th>
            <th>
                @if(request()->input('order_by') == 'group' && request()->input('direction') == 'desc')
                    <a href="{{ route('soldiers.index', ['order_by' => 'group', 'direction' => 'asc']) }}">
                        Állománycsoport
                    </a>
                @else
                    <a href="{{ route('soldiers.index', ['order_by' => 'group', 'direction' => 'desc']) }}">
                        Állománycsoport
                    </a>
                @endif
            </th>
        </tr>
        @foreach ($soldiers as $soldier)    
            <tr>
                <td>{{ $soldier->id }}</td>
                <td>{{ $soldier->prefix }}</td>
                <td>{{ $soldier->last_name }}</td>
                <td>{{ $soldier->first_name }}</td>
                <td>{{ $soldier->group }}</td>
            </tr>
        @endforeach
    </table>
@stop