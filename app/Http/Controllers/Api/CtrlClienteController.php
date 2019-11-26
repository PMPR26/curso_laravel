<?php

namespace App\Http\Controllers\Api; //Lugar de trabajo

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CtrlBaseController; 
use App\Models\MdlCliente;
use App\Http\Requests\Api\Clientes\StoreRequest;
use App\Http\Requests\Api\Clientes\UpdateRequest;

class CtrlClienteController extends CtrlBaseController{
    //Listar todos los registros
    public function index(){
        $List = Cliente::all();
        return $this->sendResponse($List, "LISTA DE REGISTROS");
    }
    
    //Recuperar un cliente por id
    public function show($id){
        $result = Cliente::where('id',$id)->first();
        return $this->sendResponse($result, $result?"REGISTRO RECUPERADO":"REGISTRO NO ENCONTRADO");
    }

    

  

    //Crear un cliente
    public function store(StoreRequest $request){
        $result = Cliente::create($request->all());
        return $this->sendResponse($result, $result?"REGISTRO CREADO":"REGISTRO NO CREADO");
    }


    //Editar un cliente por id
    
    public function update(UpdateRequest $request, $id){
        $result = Cliente::where('id',$id)->update($request->all());
        $result = $result?Cliente::where('id',$id)->first():null;
        return $this->sendResponse($result, $result?"REGISTRO EDITADO":"REGISTRO NO ENCONTRADO");
    }
      // delete
    public function destroy($id){
        $result = Cliente::where('id',$id)->delete();
        return $this->sendResponse($result,$result?"REGISTRO ELIMINADO":"REGISTRO NO ELIMINADO");
    }
}
