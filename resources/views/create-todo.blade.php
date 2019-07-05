<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create TODO list</title>
    <style>
        .button8 {
            display: inline-block;
            color: #4dc0b5;
            font-weight: 700;
            text-decoration: none;
            user-select: none;
            padding: .5em 2em;
            outline: none;
            border: 2px solid;
            border-radius: 1px;
            transition: 0.2s;
        }
        .button8:hover { background: rgba(255,255,255,.2); }
        .button8:active { background: white; }
    </style>
</head>
<body>
        <form action="/create-todo" method="POST">
            @csrf
            <input type="text" name="name" placeholder=" New project">
            <input type="submit"  value="Сохранить" class="button8">
        </form>
        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <br>
        <a href="/"><button class ="button8">Назад</button></a>
</body>
</html>