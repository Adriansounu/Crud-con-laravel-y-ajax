<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB; //trabajar con base de datos utilizando procedimientos almacenados
use Illuminate\Http\Request; //recuperar datos de la vista
use Yajra\DataTables\DataTables;

class escuelacontroller extends Controller
{
public function index(Request $request){
    if($request->ajax()){
        $escuelas = DB::select('CALL spsel_escuela()');
        return DataTables::of($escuelas)
               ->addColumn('action', function($escuelas){
            $acciones='<a href="javascript:void(0)" onclick="editarEscuela('.$escuelas->id.')" class="btn btn-info btn-sm">Editar </a>';
            $acciones .= '&nbsp;&nbsp;<button type="button" name="delete" id="'.$escuelas->id.'" class="delete btn btn-danger btn-sm"> Eliminar </button>';
            return $acciones;
        })
        ->rawColumns(['action'])
        ->make(true);
    }
    return view('escuela.index');
}
public function registrar(Request $request){
    //llamar al procedimiento almacenado

    $escuelas = DB::select('call spcree_escuela(?,?,?,?)',
                [$request->Curso, $request->Instructor, $request->Horas, $request->Fecha]);

    return back();            

}
public function eliminar($id){
    $escuelas = DB::select('call spdel_escuela(?)', [$id]);
    return back();
}
public function editar($id){
    $escuelas = DB::select('call spsledit_esc(?)', [$id]);
    return response()->json($escuelas);
}

public function actualizar(Request $request){
    $escuelas = DB::select('call spupd_esc(?,?,?,?,?)',
             [$request->id, $request->Curso, $request->Instructor, $request->Horas, $request->Fecha]);

    return back();
}
}
