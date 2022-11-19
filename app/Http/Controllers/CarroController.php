<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Marca;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();

        return view("carro.create", ["marcas"=>$marcas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carro = new Carro;

        if ($request->image != null) {

            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]);

            $imageName = time() . '.' . $request->image->extension();

            // Public Folder
            $request->image->move(public_path('images'), $imageName);
            $carro->img_path = $imageName;
        }

        $carro->nome = $request->nome;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->ano_modelo = $request->ano_modelo;
        $carro->km = $request->km;
        $carro->cambio = $request->cambio;
        $carro->combustivel = $request->combustivel;
        $carro->cor = $request->cor;
        $carro->preco = $request->preco;
        $carro->contato = $request->contato;
        $carro->endereco = $request->endereco;
        $carro->marca_id = $request->marca_id;
        $carro->descricao = "";

        $carro->save();

        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::where('id', $id)->first();
        if ($carro != null)
            return view('carro.show', ["carro" => $carro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carro = Carro::where('id', $id)->first();
        $marcas = Marca::all();

        if ($carro != null)
            return view('carro.edit', ["carro" => $carro, 'marcas'=> $marcas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carro = Carro::find($id);

        if ($request->image != null) {

            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]);

            $imageName = time() . '.' . $request->image->extension();

            // Public Folder
            $request->image->move(public_path('images'), $imageName);
            $carro->img_path = $imageName;
        }else{
            $carro->img_path = $carro->img_path;
        }

        $carro->nome = $request->nome;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->ano_modelo = $request->ano_modelo;
        $carro->km = $request->km;
        $carro->cambio = $request->cambio;
        $carro->combustivel = $request->combustivel;
        $carro->cor = $request->cor;
        $carro->preco = $request->preco;
        $carro->contato = $request->contato;
        $carro->endereco = $request->endereco;
        $carro->marca_id = $request->marca_id;
        $carro->descricao = "";

        $carro->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carro = Carro::find($id);

        $carro->delete();
        return "Done delete";
    }
}
