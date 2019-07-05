<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        .list form{
            display: inline-block;
            margin-bottom:10px;
        }
    </style>
</head>
<body>

    <form action="/project/list/save/" method="POST">
    @csrf
        <input type="hidden" name="project_id" value="{{ $project->id }}">
        <input type="text" name="name">
        <input type="submit" class="button8">
    </form>
    @if ($errors->any())
        <ul>
            @foreach($errors -> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if( sizeof($project -> projectList) )
        <div>
            @foreach( $project -> projectList as $list)
                <div class="list">
                    <form action="/project/list/save/{{ $list -> id }}" method="POST">
                    @csrf
                    @method('PATCH')

                         <input name='done' type="hidden" value="0" checked>
                         <input name='done' type="checkbox" value="1" onchange="this.form.submit()" {{ ($list -> done == 1) ? 'checked' : '' }}> {{ $list -> name }}

                    </form>
                    @if($list -> done)
                    <form action="/project/list/delete/{{ $list -> id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input name="project_id" type="hidden" value="{{ $project -> id }}">
                        <input type="submit" value="X" class="button8">
                    </form>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        No lists
    @endif
    <br>
    <a href="/all-todo"><button class ="button8">Назад</button></a>
</body>
</html>