<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Models\Marca;
use App\Models\Carro;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $marcas = Marca::all();
    

    foreach ($marcas as $marca){
        $marca->img_path = asset($marca->img_path);
    }

    $carros_ids = Carro::get('id');

    return view('home', ["marcas" => $marcas, "carros_ids"=> $carros_ids]);
});

Route::get('/getveiculos', function (Request $request) {

    $requests_default = [
        "preco_min"=>0, "preco_max"=>PHP_INT_MAX,
        "km_min"=>0, "km_max"=>PHP_INT_MAX,
        "ano_min"=>0, "ano_max"=>PHP_INT_MAX,
    ];

    foreach ($requests_default as $key=>$value) {
        if ($request[$key] == null)
            $request[$key] = $value;
    }


    $query = null;

    if ($request->marca != '')
        $query = Marca::where("nome", "=", $request->marca)->first()->carros()->where('km', '<=', $request->km_max)->where('km', '>=', $request->km_min)->where('ano', '<=', $request->ano_max)->where('ano', '>=', $request->ano_min)->where('preco', '<=', $request->preco_max)->where('preco', '>=', $request->preco_min);

    else{
        $query = Carro::where('km', '<=', $request->km_max)->where('km', '>=', $request->km_min)->where('ano', '<=', $request->ano_max)->where('ano', '>=', $request->ano_min)->where('preco', '<=', $request->preco_max)->where('preco', '>=', $request->preco_min);
    }

    return $query->get();
});

Route::resource('carro', CarroController::class);
