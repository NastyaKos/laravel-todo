<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Todo</title>
</head>
<body>
    <table border="1">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        </thead>
        <tbody>

            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td><a href="/project/{{ $project->id }}">{{ $project->name }}</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>