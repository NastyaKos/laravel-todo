<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Todo</title>
    <style>
        .color{
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            text-align: left;
            border-collapse: separate;
            border-spacing: 20px;
            background: #f7c6c5;
            color: #227dc7;
            border: 16px solid #f7c6c5;
            border-radius: 39px;

        }
        .th {
            font-size: 18px;
            padding: 10px;

        }
        .td {
            background: #f7f7f7;
            padding: 10px;
        }
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
            margin: 10px 50px
        }
        .button8:hover { background: rgba(255,255,255,.2); }
        .button8:active { background: white; }
    </style>
</head>
<body>
    <table border="1" class="color">
        <thead>
        <tr class="th">
            <td>ID</td>
            <td>Name</td>
        </tr>
        </thead>
        <tbody>

            @foreach($projects as $project)
                <tr class="td">
                    <td>{{ $project->id }}</td>
                    <td><a href="/project/{{ $project->id }}">{{ $project->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/"><button class ="button8">Назад</button></a>
</body>
</html>