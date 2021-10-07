<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Titolo</h1>

    @foreach($movies as $movie)
        <div>
            <p>{{$movie->title}}</p>
            <p>{{$movie->nationality}}</p>
            <p>{{$movie->date}}</p>
            <p>{{$movie->vote}}</p>
            <br>
        </div>
    @endforeach
    
</body>
</html>