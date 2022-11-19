<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-dark-blue antialiased">
    <div class="flex h-full w-full">
        <div class="ml-auto mr-auto mb-auto mt-auto rounded-md border bg-light-blue" style="width: 600px">
            <img class="h-44 w-full object-cover" src="{{ asset('images/' . $carro->img_path) }}" />
            <h2 class="w-full] ml-2 mt-2 overflow-hidden text-left text-xl font-bold text-slate-700">
                {{ $carro->nome }}
            </h2>
            <h2 class="ml-2 mt-2 h-[4.5rem] w-full overflow-hidden text-left text-sm font-bold text-slate-500">
                {{ $carro->modelo }}
            </h2>
            <div class="grid h-full w-full grid-cols-3 gap-2 p-3">
                <div>
                    <h2 class="text-md mt-2 w-full overflow-hidden text-left font-bold text-slate-900">
                        Ano
                    </h2>
                    <h2 class="text-2sm w-full overflow-hidden text-left font-bold text-slate-500">
                        {{ $carro->ano }}/{{ $carro->ano_modelo }}
                    </h2>
                </div>

                <div>
                    <h2 class="text-md mt-2 w-full overflow-hidden text-left font-bold text-slate-900">
                        Km
                    </h2>
                    <h2 class="text-2sm w-full overflow-hidden text-left font-bold text-slate-500">
                        {{ $carro->km }}
                    </h2>
                </div>

                <div>
                    <h2 class="text-md mt-2 w-full overflow-hidden text-left font-bold text-slate-900">
                        Cor
                    </h2>
                    <h2 class="text-2sm w-full overflow-hidden text-left font-bold text-slate-500">
                        {{ $carro->cor }}
                    </h2>
                </div>

                <div>
                    <h2 class="text-md mt-2 w-full overflow-hidden text-left font-bold text-slate-900">
                        Combustivel
                    </h2>
                    <h2 class="text-2sm w-full overflow-hidden text-left font-bold text-slate-500">
                        {{ $carro->combustivel }}
                    </h2>
                </div>

                <div>
                    <h2 class="text-md mt-2 w-full overflow-hidden text-left font-bold text-slate-900">
                        Combustivel
                    </h2>
                    <h2 class="text-2sm w-full overflow-hidden text-left font-bold text-slate-500">
                        {{ $carro->combustivel }}
                    </h2>
                </div>
            </div>
            <hr class="mt-5 mb-5" />

            <div class="flex">
                <h2 class="ml-3 mt-2 overflow-hidden text-left text-2xl font-bold text-slate-900">
                    Preco:
                </h2>
                <h2 class="ml-5 mt-2 mb-6 overflow-hidden text-left text-2xl font-bold text-slate-900">
                    R$ {{ (int) $carro->preco }}
                </h2>

                <div class="mr-4 ml-auto mt-1 flex">
                    <div onclick="href('/carro/{{ $carro->id }}/edit')"
                        class="text-md mr-2 h-10 w-10 rounded-md bg-amber-500 p-2 pl-3 pr-3 font-bold text-slate-800 shadow-md transition delay-75 ease-in-out hover:cursor-pointer hover:bg-amber-600">
                        <i class="bi bi-gear-fill"></i>
                    </div>

                    <div onclick="delete_carro('{{ $carro->id }}')"
                        class="text-md h-10 w-10 rounded-md bg-red-500 p-2 pl-3 pr-3 font-bold text-slate-800 shadow-md transition delay-75 ease-in-out hover:cursor-pointer hover:bg-red-600">
                        <i class="bi bi-trash-fill"></i>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function href(url) {
                location.href = url;
            }

            function delete_carro(id) {
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                });

                var ajxReq = $.ajax("/carro/" + id, {
                    type: "DELETE",
                });

                ajxReq.done(function(data) {
                    Swal.fire(
                        "Carro deletado com sucesso!",
                        "Voltando...",
                        "success"
                    );

                    setTimeout(() => {
                        location.href = "/";
                    }, 1000);
                });
            }
        </script>
    </div>
</body>

< </html>
