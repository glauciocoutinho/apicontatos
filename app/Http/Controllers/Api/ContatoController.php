<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contato;
use App\Http\Controllers\Api\ContatoController;


class ContatoController extends Controller
{
    public function status(){
        return ['status' => 'OK'];
    }

    public function add(Request $request) {

        try {
            $contato = new Contato();

            $contato->nome = $request->nome;
            $contato->telefone = $request->telefone;
            $contato->email = $request->email;

            $contato->save();

            return ['retorno' => 'OK'];

        } catch(\Exception $erro) {

            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }

    public function list() {

        $contato = Contato::all();

        return $contato;
    }

    public function select($id) {

        $contato = Contato::find($id);

        return $contato;
    }


    public function update(Request $request, $id) {

        try {
            $contato = Contato::find($id);

            $contato->nome = $request->nome;
            $contato->telefone = $request->telefone;
            $contato->email = $request->email;

            $contato->save();

            return ['retorno' => 'OK, atualizado com sucesso', 'data'=>$request];

        } catch(\Exception $erro) {

            return ['retorno'=>'erro', 'details'=>$erro];
        }
    }
}
