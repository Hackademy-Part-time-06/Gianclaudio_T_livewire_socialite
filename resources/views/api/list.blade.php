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
            @foreach ($animes as $anime)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{ $anime['images']['jpg']['large_image_url'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $anime['title_english'] }}</h5>
                            <p class="card-text text-truncate">{{ $anime['synopsis'] }}</p>
                            <p class="small fst-italic text-muted">Anno: {{ $anime['year'] }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
