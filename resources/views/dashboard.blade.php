<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Files with status "in"</h1>
    <ul>
        @foreach($filesIn as $file)
            <li>
                {{ $file->no_filez }} - {{ $file->date }} - {{ $file->origin }}
            </li>
        @endforeach
    </ul>

    <h1>Files with status "out"</h1>
    <ul>
        @foreach($filesOut as $file)
            <li>
                {{ $file->no_filez }} - {{ $file->date }} - {{ $file->origin }}
            </li>
        @endforeach
    </ul>
</body>
</html>
