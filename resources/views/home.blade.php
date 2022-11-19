<!DOCTYPE html>
<html class="h-full"
  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1" />

  <!--jquery-->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>

  <!--fuse-->
  <script src="https://cdn.jsdelivr.net/npm/fuse.js/dist/fuse.js"></script>


  <title>
    Laravel
  </title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
    rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-dark-blue antialiased">
  <div class="flex h-full">
    <div class="h-full w-full">
      <div class="ml-auto mr-auto w-full bg-light-blue">
        <!-- Contatos -->
        <div class="mx-auto flex h-14 w-full shadow-md">
          <div class="m-4 ml-12 flex w-1/2">
            <div class="select-none space-x-3">
              <i class="bi bi-facebook hover:cursor-pointer"></i>
              <i class="bi bi-twitter hover:cursor-pointer"></i>
              <i class="bi bi-instagram hover:cursor-pointer"></i>
              <i class="bi bi-youtube hover:cursor-pointer"></i>
              <i class="bi bi-pinterest hover:cursor-pointer"></i>
            </div>
            <i class="bi bi-telephone-fill ml-10 mr-2 mt-1"></i>
            (xx)
            xx
            xxxxxxxxxx
          </div>

          <div class="w-90 m-4 flex w-1/2 text-right">
            <i class="bi bi-lightbulb hover:text-light ml-auto mr-2 select-none hover:cursor-pointer"
              id="theme-button"></i>

          </div>
        </div>

        <!-- Logo  -->
        <div class="h-24 w-full">
          <div class="mt-auto mb-auto flex h-[110px] hover:cursor-pointer"
            id="logo">
            <svg class="ml-12 mr-6 h-[110px] fill-red_t"
              viewBox="0 0 256.00007 256.00002">
              @include(' templates.logo2')
            </svg>

            <h3 class="logo mt-8 mb-auto h-7 text-3xl font-bold">
              Cars
              Auto
            </h3>
          </div>
        </div>
      </div>


      <!-- Sideabr -->
      <div class="h-1000 flex">

        <!-- Pesquisa -->
        <div class="h-[1000px] w-[350px] min-w-[350px] bg-light-blue">
          <div id="form_search">
            <div class="ml-4 mr-4">
              <label class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"
                for="default-search">Search</label>
              <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                  <svg class="h-5 w-5 text-gray-500 dark:text-gray-400"
                    aria-hidden="true"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">

                    <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                  </svg>
                </div>

                <input
                  class="dark:placeholder-gray-40 0 block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                  id="carro_search"
                  type="search"
                  placeholder="Pesquise Carro, Marcas..." />

                <button
                  class="absolute right-2.5 bottom-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300 hover:bg-blue-800 dark:bg-blue-600 dark:focus:ring-blue-800 dark:hover:bg-blue-700"
                  id="btn_search"
                  type="submit">
                  Pesquisar
                </button>
              </div>
            </div>

            <!--<div class="m-3 mt-10 rounded-md border p-3">
    

                            <p class="mb-3 text-sm font-bold text-gray-800">
                                Carros
                            </p>

                            <div class="mb-4 flex items-center">
                                <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600" id="default-checkbox" name="usados" type="checkbox" value="">
                                <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600" for="default-checkbox">Usados</label>
                            </div>
                            <div class="flex items-center">
                                <input class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600" id="checked-checkbox" type="checkbox" value="" checked>
                                <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600" for="checked-checkbox">Novos</label>
                            </div>
                        </div>-->

            <!-- Marca select -->
            <div class="m-3 mt-5 rounded-md border p-3">
              <p class="mb-3 text-sm font-bold text-gray-800">
                Marca
              </p>

              <input
                class="dark:placeholder-gray-40 0 block h-10 w-full rounded-lg border border-gray-300 bg-gray-50 p-4 pl-4 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                id="search_marcas"
                type="search"
                placeholder="Pesquisar marca, ex: Fiat..."
                autocomplete="off" />

              <div
                class="mt-2 h-48 scrollbar-thin scrollbar-track-gray-100 scrollbar-thumb-gray-900 scrollbar-track-rounded-full scrollbar-thumb-rounded-full"
                id="marca_selectors">

              </div>



            </div>

            <!-- Preço range -->
            <div class="m-3 mt-5 rounded-md border p-3">
              <p class="mb-3 text-sm font-bold text-gray-800">
                Preço
              </p>

              <div class="flex">
                <div class="relative z-0 mr-3">
                  <input
                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    id="preco_min"
                    type="text"
                    placeholder=" " />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                    for="floating_standard">De</label>
                </div>

                <div class="relative z-0 ml-3">
                  <input
                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    id="preco_max"
                    type="text"
                    placeholder=" " />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                    for="floating_standard">Até</label>
                </div>
              </div>
            </div>

            <!-- Km range -->
            <div class="m-3 mt-5 rounded-md border p-3">
              <p class="mb-3 text-sm font-bold text-gray-800">
                Quilometragem
              </p>

              <div class="flex">
                <div class="relative z-0 mr-3">
                  <input
                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    id="km_min"
                    type="text"
                    placeholder=" " />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                    for="floating_standard">De</label>
                </div>

                <div class="relative z-0 ml-3">
                  <input
                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    id="km_max"
                    type="text"
                    placeholder=" " />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                    for="floating_standard">Até</label>
                </div>
              </div>
            </div>

            <!-- Ano range -->
            <div class="m-3 mt-5 rounded-md border p-3">
              <p class="mb-3 text-sm font-bold text-gray-800">
                Ano
              </p>

              <div class="flex">
                <div class="relative z-0 mr-3">
                  <input
                    class="peer focus:r ing-0 block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    id="ano_min"
                    type="text"
                    placeholder=" " />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                    for="floating_standard">De</label>
                </div>

                <div class="relative z-0 ml-3">
                  <input
                    class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0 dark:border-gray-600 dark:text-white dark:focus:border-blue-500"
                    id="ano_max"
                    type="text"
                    placeholder=" " />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 dark:text-gray-400 peer-focus:dark:text-blue-500"
                    for="floating_standard">Até</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Grid de veiculos -->
        <div
          class="ml-auto mr-auto grid justify-evenly gap-2 p-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5"
          id="grid_veiculos">
          <div
            class="h-96 w-60 rounded border-solid bg-light-blue p-0 shadow-inner drop-shadow-lg transition delay-75 ease-in-out hover:scale-105 hover:cursor-pointer hover:shadow-lg"
            onclick="location.href = '/carro/create'">
            <img class="h-44 w-full rounded-md object-cover"
              src="{{ asset('imgs/image-placeholder-base.jpg') }}" />
            <div class="h-30 flex">
              <h2 class="mt-20 h-[4.5rem] w-full overflow-hidden text-center text-2xl font-bold text-slate-700">
                Adicionar
                Carro
              </h2>
            </div>
          </div>

          @foreach ($carros_ids as $carro_id)
            <x-carro-view id="{{ $carro_id->id }}" />
          @endforeach





        </div>
      </div>
    </div>
  </div>

  <script>
    var marcas_db = @json($marcas);

    //Fuseword config
    const options = {
      includeScore: true,
      keys: ['nome']
    }

    const fuse = new Fuse(marcas_db, options)

    function generate_options(marcas) {
      $("#marca_selectors").html('')

      marcas.forEach(marca => {
        $("#marca_selectors").append(`
          <div onclick="set_marca('${ marca.nome }')" id="${ marca.nome }" class="w-full rounded-md flex over w-[90%] p-2 transition duration-75 ease-in-out hover:bg-slate-200 hover:scale-105 hover:cursor-pointer">
            <img class="ml-2 mr-2 h-9"
              src="${ marca.img_path }">

            <p class="mt-auto mb-auto text-xl font-bold">
              ${ marca.nome }
            </p>
          </div>
        `)
      });
    }

    $('#search_marcas').on('input', function(e) {
      var text = $("#search_marcas").val()

      var marcas_fuse = fuse.search(text);
      var marcas = []
      marcas_fuse.forEach(marca => {
        if (marca.score < 0.5)
          marcas.push(marca['item'])
      })

      if (marcas.length == 0)
        generate_options(marcas_db)
      else
        generate_options(marcas)
    });

    //Init
    generate_options(marcas_db)

    //Global variabel marca

    var global_marca_selected = null;

    function set_marca(marca) {

      if (global_marca_selected != null)
        $("#" + global_marca_selected).removeClass("bg-slate-300")

      if (global_marca_selected == marca) {
        $("#" + global_marca_selected).removeClass("bg-slate-300")
        global_marca_selected = null;
      } else {
        global_marca_selected = marca;
        $("#" + marca).addClass("bg-slate-300")
      }

    }

    /*
    Search script
    */
    const asset_url = '{{ asset('') }}'

    const search_options = {
      includeScore: true,
      keys: ['nome', 'modelo'],
      minMatchCharLength: 2,
      ignoreLocation: true,
      distance: 200

    }

    $("#btn_search").click("submit", function(event) {

      var data = {}
      var search_text = $("#carro_search").val()

      data['preco_min'] = $("#preco_min").val()
      data['preco_max'] = $("#preco_max").val()
      data['km_min'] = $("#km_min").val()
      data['km_max'] = $("#km_max").val()
      data['ano_min'] = $("#ano_min").val()
      data['ano_max'] = $("#ano_max").val()
      data['carro_search'] = search_text
      data['marca'] = global_marca_selected;


      for (const [key, value] of Object.entries(data)) {
        if (value == "")
          delete data[key]
      }

      $.ajax({
        url: '/getveiculos',
        type: 'get',
        data: data,
        success: function(data) {
          // ... do something with the data...
          $(".carro_component").remove()

          var grid = $("#grid_veiculos")
          var carro = null;

          if (search_text != "") {

            const fuse = new Fuse(data, search_options)

            var carros_fuse = fuse.search(search_text);
            carros = []
            console.log(carros_fuse)
            carros_fuse.forEach(carro => {
              if (carro.score < 0.61)
                carros.push(carro['item'])
            })
          } else {

            carros = data;
          }

          carros.forEach(carro => {
            console.log("dadd")
            grid.append(`
                    <div
                    class="carro_component h-96 w-60 rounded border-solid bg-light-blue p-0 shadow-inner drop-shadow-lg transition delay-75 ease-in-out hover:scale-105 hover:cursor-pointer hover:shadow-lg"
                    onclick="location.href = '/carro/${ carro.id }'">
                    <img class="h-44 w-full object-cover"
                      src="${asset_url + 'images/' +  carro.img_path}" />
                    <div class="h-30">
                      <h2 class="w-full] ml-2 mt-2 overflow-hidden text-left text-xl font-bold text-slate-700">
                        ${ carro.nome }
                      </h2>

                      <h2 class="ml-2 mt-2 h-[4.5rem] w-full overflow-hidden text-left text-sm font-bold text-slate-500">
                        ${ carro.modelo }
                      </h2>

                      <div class="flex">
                        <h2 class="ml-2 mt-2 overflow-hidden text-left text-2xl font-bold text-slate-900">
                          R$ ${ carro.preco }
                        </h2>

                        <h2 class="ml-auto mr-2 mt-4 overflow-hidden text-left text-sm font-bold text-slate-500">
                          ${ carro.km } km
                        </h2>
                      </div>

                      <hr class="mt-2" />

                      <h2 class="ml-auto ml-2 mt-2 overflow-hidden text-left text-sm font-bold text-slate-500">
                        ${ carro.ano }/${ carro.ano_modelo }
                      </h2>
                    </div>
                  </div>
          `);


          });


        }
      })
    })
  </script>


</body>

</html>
