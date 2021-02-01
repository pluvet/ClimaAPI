<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use GuzzleHttp\Client;


function request($city){
    $client = new Client();

    $authorization = env('TOKEN', '');
    $client = new Client();
    $res = $client->get("http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$authorization", [
        'headers' => [
        'Content-type' =>  'application/json'
        ]
    ]);
    $res = json_decode($res->getBody()->getContents());
    $res = json_decode(json_encode($res), true);
    return $res;
}

class ConsultaController extends Controller
{
    public function show($ciudad){

        $this->store($ciudad);

        return request($ciudad);

    }

    public function index(){
        return Consulta::all();
    }

    public function store($ciudad){
        $consulta = new Consulta();
        $consulta->ciudad = $ciudad;
        $consulta->save();
    }


}
