<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <div class="container">
            <div class="row ">
                <div class="col-mb-6 d-flex justify-content-center">
                    <button class="">
                    <a href="{{route('books.index')}}">Lezione</a>
                     </button>   
                      
                </div>
                
            </div>
        </div>
        
     
    <body class="antialiased">
       
    </body>
</html>
