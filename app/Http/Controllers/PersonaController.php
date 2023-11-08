<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function listarPersona(){
        try{
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            alert()->success('Exitoso', $nombre_dn)->toToast();
        }catch(Exception $ex){
            //toast('Success Toast','error');
            alert()->error('Error', $ex->getMessage())->toToast();
        }

        $personas = Persona::all();
        //dd($personas);
        return view('lista-personas',compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }
}
