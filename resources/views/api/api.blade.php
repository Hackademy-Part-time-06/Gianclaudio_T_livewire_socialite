<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($genres as $genre)
                <div class="col-12 col-md-2">
                    <a href="{{ route('anime.list', ['genre_id' => $genre['mal_id'], 'genre_name' => $genre['name']]) }}"
                        class="btn btn-primary my-2">
                        {{ $genre['name'] }}
                        {{ $genre['mal_id'] }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
