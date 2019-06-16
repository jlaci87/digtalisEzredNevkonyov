<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Névsor</title>

    <style>
        table, th, td {
            border: 1px solid #333;
            border-collapse: collapse;
        }
        th, td {
            width: 150px;
        }
        td {
            text-align: center;
        }
        /* .cell_bnt{
            display: flex;
            border: none;
        } */
    </style>
</head>
<body>
    <nav class="navigation">
            <a href="{{ route('index') }}">Főoldal</a>
            <a href="{{ route('soldiers.index') }}">Névsor</a>
    </nav>
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
                    <a href="">Mósosítás</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>