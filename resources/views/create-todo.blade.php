<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create TODO list</title>
</head>
<body>
    <form action="/create-todo" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="submit" value="Сохранить">
    </form>
    <br>
    <a href="/">Назад</a>
</body>
</html>