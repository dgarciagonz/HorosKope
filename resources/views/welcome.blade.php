<html lang="es">
    <head>
        <title>Horoskope</title>
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div class="fondo-espacial">
            <div class="container-fluid fondo">
                <div class="row">
                    <div class="col-12">
                        <div class="row d-flex justify-content-center pt-2">
                                <div class="col-10 col-md-4 mt-5">
                                    <img src="{{ asset('icon/logo-grande.png') }}" class="w-100 rounded h-100 object-fit-cover object-center">
                                </div>
                            </div>
                        <div class="row d-flex justify-content-center pt-2">
                            <div class="col-10 col-md-4 mt-5 d-flex justify-content-around">
                            @if (Route::has('login'))
                                
                                    @auth
                                        <h1><a href="{{ url('/home') }}" class="btn btn-primary btn-lg"> Acceder </a></h1>
                                    @else
                                    <h1><a href="{{ route('login') }}" class="btn btn-primary btn-lg"> Iniciar sesión </a></h1>

                                        @if (Route::has('register'))
                                        <h1><a href="{{ route('register') }}" class="btn btn-primary btn-lg"> Registrarse </a></h1>
                                        @endif
                                    @endauth
                                
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

    