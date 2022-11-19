<!DOCTYPE html>
<html class="h-full"
  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1" />

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
    rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-dark-blue antialiased">
  <div class="flex h-full w-full">
    <div class="ml-auto mr-auto mb-auto mt-auto w-1/2 rounded-md border bg-light-blue p-10">
      <form method="POST"
        action="{{ route('carro.store') }}"
        enctype="multipart/form-data">
        @csrf

        <div class="flex">
          <div class="group relative z-0 mb-6 mr-3 flex w-1/2">
            <div class="mr-3 w-1/2">
              <input
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                id="nome"
                name="nome"
                type="text"
                placeholder=" "
                required />
              <label
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                for="nome">Nome do Carro</label>
            </div>

            <div class="ml-3 w-1/2">
              <label class="sr-only"
                for="marca_id">marca_id</label>
              <select
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
                id="marca_id"
                name="marca_id">
                <option selected>Escolha a Marca</option>
                @foreach ($marcas as $marca)
                  <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                @endforeach
              </select>
            </div>

          </div>

          <div class="group relative z-0 mb-6 ml-3 w-1/2">
            <input
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
              id="modelo"
              name="modelo"
              type="text"
              placeholder=" "
              required />
            <label
              class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
              for="modelo">Modelo</label>
          </div>
        </div>

        <div class="mt-10 flex">
          <div class="group relative z-0 mb-6 mr-3 flex w-1/2">
            <div class="relative mr-3 w-1/2">
              <input
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                id="ano"
                name="ano"
                type="number"
                placeholder=" "
                required />
              <label
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                for="ano">Ano</label>
            </div>

            <div class="relative ml-3 w-1/2">
              <input
                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                id="ano_modelo"
                name="ano_modelo"
                type="number"
                placeholder=" "
                required />
              <label
                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                for="ano_modelo">Ano
                Modelo</label>
            </div>
          </div>

          <div class="group relative z-0 mb-6 ml-3 w-1/2">
            <input
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
              id="km"
              name="km"
              type="number"
              placeholder=" "
              required />
            <label
              class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
              for="km">Km</label>
          </div>
        </div>

        <div class="mt-10 flex">
          <div class="group relative z-0 mb-6 mr-3 w-1/2">
            <label class="sr-only"
              for="cambio">Cambio</label>
            <select
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
              id="cambio"
              name="cambio">
              <option selected>Escolha um cambio</option>
              <option value="MT">Manual</option>
              <option value="AT">Automatico</option>
            </select>
          </div>
          <div class="group relative z-0 mb-6 ml-3 w-1/2">
            <label class="sr-only"
              for="combustivel">Combustivel</label>
            <select
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-200 bg-transparent py-2.5 px-0 text-sm text-gray-500 focus:border-gray-200 focus:outline-none focus:ring-0 dark:border-gray-700 dark:text-gray-400"
              id="combustivel"
              name="combustivel">
              <option selected>Escolha um combustivel</option>
              <option value="Gasolina">Gasolina</option>
              <option value="Etanol">Etanol</option>
              <option value="Flex">Flex</option>
            </select>
          </div>
        </div>

        <div class="mt-10 flex">
          <div class="group relative z-0 mb-6 mr-3 w-1/2">
            <input
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
              id="cor"
              name="cor"
              type="text"
              placeholder=" "
              required />
            <label
              class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
              for="cor">Cor</label>
          </div>

          <div class="group relative z-0 mb-6 ml-3 w-1/2">
            <input
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
              id="preco"
              name="preco"
              type="number"
              placeholder=" "
              required />
            <label
              class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
              for="preco">Preco</label>
          </div>
        </div>

        <div class="mt-10 flex">

          <div class="group relative z-0 mb-6 mr-3 w-1/2">
            <input
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
              id="endereco"
              name="endereco"
              type="text"
              placeholder=" "
              required />
            <label
              class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
              for="nome">Endereço</label>
          </div>

          <div class="group relative z-0 mb-6 ml-3 w-1/2">
            <input
              class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
              id="contato"
              name="contato"
              type="text"
              placeholder=" "
              required />
            <label
              class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
              for="modelo">Contato</label>
          </div>
        </div>

        <label class="for= mb-2 block text-sm font-medium text-gray-500"
          file_input>Upload foto</label>
        <input
          class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
          id="file_input"
          name="image"
          type="file"
          aria-describedby="file_input_help" />
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"
          id="file_input_help">
          SVG, PNG, JPG or GIF (MAX. 800x400px).
        </p>

        <button
          class="mt-10 w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-blue-800 dark:bg-blue-600 dark:focus:ring-blue-800 dark:hover:bg-blue-700 sm:w-auto"
          type="submit">
          Criar
        </button>
      </form>
    </div>
  </div>
</body>

</html>
