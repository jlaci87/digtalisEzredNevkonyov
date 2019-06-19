<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekord Módosítás</title>

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
    </style>
</head>
<body>
    <nav class="navigation">
        <a href="{{ route('index') }}">Főoldal</a>
        <a href="{{ route('soldiers.index') }}">Névsor</a>
    </nav>
    <form action="{{ route('soldiers.store') }}" method="POST">
        {{ csrf_field() }} 
        {{-- <input type="hidden" name="_method" value="patch"> --}}
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
        <button type="submit">Feltöltés</button>
    </form>
</body>
</html>