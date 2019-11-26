<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\CtrlBaseController;
use Illuminate\Http\Request;
use App\Models\MdlFactura;
use App\Http\Requests\Api\Factura\StoreRequest;
use App\Http\Requests\Api\Factura\UpdateRequest;

class CtrlFacturaController extends CtrlBaseController{
    //Recupera todos los registros
    public function index(){
        $List = Factura::all();
        return $this->sendResponse($List, "LISTA DE REGISTROS");
    }
    //Recuperar un registro por id
    public function show($id){
        $result = Factura::where('id',$id)->first();
        return $this->sendResponse($result, $result?"REGISTRO RECUPERADO":"REGISTRO NO ENCONTRADO");
    }

    //Edita un registro por id
    public function update(UpdateRequest $request, $id){
        $result = Factura::where('id',$id)->update($request->all());
        $result = $result?Factura::where('id',$id)->first():null;
        return $this->sendResponse($result, $result?"REGISTRO EDITADO":"REGISTRO NO ENCONTRADO");
    }

    //Elimina un registro por id    
    public function destroy($id){
        $result = Factura::where('id',$id)->delete();
        return $this->sendResponse($result,$result?"REGISTRO ELIMINADO":"REGISTRO NO ELIMINADO");
    }

    //Crear un un registro
    public function store(StoreRequest $request){
        $result = Factura::create($request->all());
        return $this->sendResponse($result, $result?"REGISTRO CREADO":"REGISTRO NO CREADO");
    }
}
