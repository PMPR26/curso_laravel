<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ctrlBaseController;
use App\Models\MdlModoPago;
use App\Http\Requests\Api\ModoPago\StoreRequest;
use App\Http\Requests\Api\ModoPago\UpdateRequest;

class CtrlModoPagoController extends CtrlBaseController{
    //Recupera todos los registros
    public function index(){
        $List = ModoPago::all();
        return $this->sendResponse($List, "LISTA DE REGISTROS");
    }
    //Recuperar un registro por id
    public function show($id){
        $result = ModoPago::where('id',$id)->first();
        return $this->sendResponse($result, $result?"REGISTRO RECUPERADO":"REGISTRO NO ENCONTRADO");
    }

    //Edita un registro por id
    public function update(UpdateRequest $request, $id){
        $result = ModoPago::where('id',$id)->update($request->all());
        $result = $result?ModoPago::where('id',$id)->first():null;
        return $this->sendResponse($result, $result?"REGISTRO EDITADO":"REGISTRO NO ENCONTRADO");
    }

    //Elimina un registro por id    
    public function destroy($id){
        $result = ModoPago::where('id',$id)->delete();
        return $this->sendResponse($result,$result?"REGISTRO ELIMINADO":"REGISTRO NO ELIMINADO");
    }

    //Crear un un registro
    public function store(StoreRequest $request){
        $result = ModoPago::create($request->all());
        return $this->sendResponse($result, $result?"REGISTRO CREADO":"REGISTRO NO CREADO");
    }
}
