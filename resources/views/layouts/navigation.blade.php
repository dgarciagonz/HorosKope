<link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav x-data="{ open: false }" class="menunav sticky-top">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-content-center h-16 row">
       
            <div class="col-12  flex justify-content-around">

                <!-- Navigation Links -->


               
                <div class=" space-x-8 flex">
                    <x-nav-link :href="route('coleccion')" :active="request()->routeIs('coleccion')" class="noSub">
                        <i class="fa-solid fa-box-open fa-2xl" style="color: #ECBDFF;"></i>                    
                    </x-nav-link>
                </div>

                <div class="space-x-8  flex">
                    <x-nav-link :href="route('tarot')" :active="request()->routeIs('tarot')" class="noSub">
                        <i class="fa-solid fa-hand-sparkles fa-2xl" style="color: #ECBDFF;"></i>
                    </x-nav-link>
                </div>

                <div class=" space-x-8  flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="noSub">
                        <div class="rounded-circle overflow-hidden" style="width: 50px; height: 50px;">
                            <img src="{{ asset('icon/android-chrome-192x192.png')}}" class=" w-100 h-100 object-fit-cover object-center">
                        </div>
                    </x-nav-link>
                </div>

                <div class=" space-x-8  flex">
                    <x-nav-link :href="route('citas')" :active="request()->routeIs('citas')" class="noSub">
                        <i class="fa-regular fa-calendar-days fa-2xl" style="color: #ECBDFF;"></i>
                    </x-nav-link>
                </div>

                @if(Auth::user()->rol=='admin' )
                    <div class=" space-x-8  flex">
                        <x-nav-link :href="route('informes')" :active="request()->routeIs('informes')" class="noSub">
                            <i class="fa-solid fa-flag fa-2xl" style="color: #ECBDFF;"></i>                    
                        </x-nav-link>
                    </div>

                    <div class=" space-x-8  flex">
                        <x-nav-link :href="route('baneos')" :active="request()->routeIs('baneos')" class="noSub">
                            <i class="fa-solid fa-hammer fa-2xl" style="color: #ECBDFF;"></i>
                        </x-nav-link>
                    </div>
                @endif

                <div class=" flex items-center  pt-2">
                    <x-dropdown width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border-transparent text-sm leading-4 font-medium rounded-md transition ease-in-out duration-150">
                                <i class="fa-solid fa-user fa-2xl"  style="color: #ECBDFF;"></i>
                             </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('perfil', ['username' => Auth::user()->username])">
                                {{ __('Mi cuenta') }}
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Settings Dropdown -->
            

            <!-- Hamburger -->
            
        
    

    <!-- Responsive Navigation Menu -->
    
    </div>
</div>

</nav>
