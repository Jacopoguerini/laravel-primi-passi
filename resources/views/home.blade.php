<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Primi Passi</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <h1>Albo d'oro del campionato europeo di calcio</h1>
            <ul>
                @foreach ($teams as $item)
                    <li>      
                        {{ $item }}
                    </li>
                @endforeach  
            </ul>  
        </div>
    </body>
</html>