<div
  class="carro_component h-96 w-60 rounded border-solid bg-light-blue p-0 shadow-inner drop-shadow-lg transition delay-75 ease-in-out hover:scale-105 hover:cursor-pointer hover:shadow-lg"
  onclick="location.href = '/carro/{{ $carro->id }}'">
  <img class="h-44 w-full object-cover"
    src="{{ asset('images/' . $carro->img_path) }}" />
  <div class="h-30">
    <h2 class="w-full] ml-2 mt-2 overflow-hidden text-left text-xl font-bold text-slate-700">
      {{ $carro->nome }}
    </h2>

    <h2 class="ml-2 mt-2 h-[4.5rem] w-full overflow-hidden text-left text-sm font-bold text-slate-500">
      {{ $carro->modelo }}
    </h2>

    <div class="flex">
      <h2 class="ml-2 mt-2 overflow-hidden text-left text-2xl font-bold text-slate-900">
        R$ {{ (int) $carro->preco }}
      </h2>

      <h2 class="ml-auto mr-2 mt-4 overflow-hidden text-left text-sm font-bold text-slate-500">
        {{ $carro->km }} km
      </h2>
    </div>

    <hr class="mt-2" />

    <h2 class="ml-auto ml-2 mt-2 overflow-hidden text-left text-sm font-bold text-slate-500">
      {{ $carro->ano }}/{{ $carro->ano_modelo }}
    </h2>
  </div>
</div>
