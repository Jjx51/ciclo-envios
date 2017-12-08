<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ciclo Envio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        
        <!-- Styles -->
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ route('inicio') }}">Inicio</a>
                    @else
                        <a href="{{ url('/login') }}">Iniciar Sesion</a>
                        <a href="{{ url('/register') }}">Registrarse</a>
                    @endif
                </div>
            @endif
            
        </div>
        <footer>      
        </footer>
    </body>
</html>
