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
        
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar negro">
                    <div class="container-fluid ">
                        <img class="ms-5 "src="{{ asset('icon/android-chrome-512x512.png') }}" width="60" height="60" alt="Logo">
                        <h1 class=" fw-bold ms-5 ps-5 titulo" href="#">Horoskope</h1>
                        
                            <ul class="navbar-nav d-flex flex-row me-5">
                            @if (Route::has('login'))
                                    
                                    @auth
                                            <li class="nav-item ">
                                                <a class="nav-link nav-link  p-3 text-center blanco" href="{{ url('/home') }}">Acceder</a>
                                            </li>
                                        @else
                                            @if (Route::has('register'))
                                                <li class="nav-item ">
                                                    <a class="nav-link nav-link  p-3 text-center blanco" href="{{ route('register') }}">Registrarse</a>
                                                </li>
                                            @endif
                                            <li class="nav-item ">
                                                <a class="nav-link nav-link p-3  text-center blanco" href="{{ route('login') }}">Iniciar Sesión</a>
                                            </li> 
                                    @endauth
                            @endif
                        </ul>
                    </div>
            </nav>
        </div>

        <div class="row">
        <div class="home d-flex col-12 ">
            <div class="texto-home text-center blanco d-flex align-items-center justify-content-center flex-column" >
                <h2 >Bienvenido a Horoskope</h2>
                <p class="col-7 pt-2">Horoskope es una innovadora red social que combina la magia del tarot y la astrología.<br> Aquí, te ofrecemos una experiencia única donde puedes explorar tu destino y compartir tus descubrimientos con una comunidad vibrante de personas que, como tú, están interesadas en lo místico y lo espiritual.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="mt-5 col-12 d-flex align-items-center flex-column justify-content-center text-center">
            <h3 class="titulos">Conéctate y Comparte</h3>
            <p class="col-7 pb-3">Horoskope es más que una herramienta predictiva; es una red social diseñada para personas que buscan compartir su viaje espiritual. Publica tus lecturas de tarot, consulta tu horoscopo y conecta con otros usuarios que comparten tus intereses. Nuestra plataforma está optimizada para facilitar la interacción y el intercambio de ideas, creando un entorno donde puedes aprender y crecer junto a otros.</p>
                
            <h3 class="titulos">Explora Nuestras Funcionalidades Destacadas</h3> 
            <p class="col-7">Horoskope no es solo una aplicación, es una puerta de entrada a un viaje personal y espiritual. En nuestra sección de funcionalidades, destacamos tres aspectos clave que hacen de Horoskope una herramienta indispensable:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex mt-5 mb-5 justify-content-around ">
            <div class=" col-12 col-md-3  horoscopo d-flex flex-column text-center blanco">
                <h3 class="fw-bold">Horóscopo Diario</h3>
                <p class="fw-bold p-2">Mantente al tanto de lo que los astros tienen preparado para ti cada día. Nuestras predicciones diarias están personalizadas según tu signo, ofreciéndote consejos prácticos y revelaciones sorprendentes que pueden ayudarte a tomar decisiones informadas.</p>
            </div>
            <div class="col-12 col-md-3  tarot d-flex flex-column text-center blanco">
                <h3 class="fw-bold">Lectura de Tarot</h3>
                <p class="fw-bold">Adéntrate en el antiguo arte de la lectura de tarot. Nuestra aplicación ofrece lecturas de tarot que te permiten explorar diferentes aspectos de tu vida. Ya sea que busques claridad sobre el amor, el dinero o la salud, nuestras cartas están aquí para guiarte.</p>
            </div>
            <div class=" col-12 col-md-3  coleccion d-flex flex-column text-center blanco">
                <h3 class="fw-bold">Colección de Cartas</h3>
                <p class="fw-bold">Como parte de la comunidad de Horoskope, puedes crear tu propia colección de cartas de tarot. Cada carta es única y ofrece una visión diferente. Descubre nuevas interpretaciones mientras interactúas con una comunidad apasionada.</p>
            </div>
        </div>

    </div>

    <div class="row">
    <footer class=" col-12 text-center pt-4 blanco ">
        <p> 2024 Horoskope. Todos los derechos reservados.</p>
    </footer>
    </div>
    

</div>        
                            
    </body>
</html>

    