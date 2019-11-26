<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CtrlBaseController;
use App\Models\MdlDetalle;
use App\Http\Requests\Api\Detalle\StoreRequest;
use App\Http\Requests\Api\Detalle\UpdateRequest;

class CtrlDetalleController extends CtrlBaseController{
     //Recupera todos los registros
     public function index(){
        $List = Detalle::all();
        return $this->sendResponse($List, "LISTA DE REGISTROS");
    }
    //Recuperar un registro por id
    public function show($id){
        $result = Detalle::where('id',$id)->first();
        return $this->sendResponse($result, $result?"REGISTRO RECUPERADO":"REGISTRO NO ENCONTRADO");
    }

    //Edita un registro por id
    public function update(UpdateRequest $request, $id){
        $result = Detalle::where('id',$id)->update($request->all());
        $result = $result?Detalle::where('id',$id)->first():null;
        return $this->sendResponse($result, $result?"REGISTRO EDITADO":"REGISTRO NO ENCONTRADO");
    }

    //Elimina un registro por id    
    public function destroy($id){
        $result = Detalle::where('id',$id)->delete();
        return $this->sendResponse($result,$result?"REGISTRO ELIMINADO":"REGISTRO NO ELIMINADO");
    }

    //Crear un un registro
    public function store(StoreRequest $request){
        $result = Detalle::create($request->all());
        return $this->sendResponse($result, $result?"REGISTRO CREADO":"REGISTRO NO CREADO");
    }
}
