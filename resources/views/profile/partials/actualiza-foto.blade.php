<section>


    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Cambiar foto de perfil') }}
        </h2>
    </header>

    

    <form method="POST" action="{{ route('profile.updateFoto', $user->id_usuario) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="d-flex">
                                <input type="file" name="icono" id="icono" class="form-control-file mb-3">
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Cambiar</button>
        </div>
    </form>
</section>


