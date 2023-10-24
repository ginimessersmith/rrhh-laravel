<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;
use App\Models\Cargo;
use Spatie\Activitylog\Models\Activity;


class PostulanteController extends Controller
{
    public function index(Request $request)
    {
        $postulante = Postulante::All();
        $cargo  = Cargo::All();
        return view('postulantes.index', compact('postulante','cargo'));
    }

    public function create()
    {   $cargo  = Cargo::All();
        return view('postulantes.crear',compact('cargo'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Email' => 'required',
            'Celular' => 'required',
            'idCargo'=>'required',
        ]);

        $postulante = Postulante::create($request->all());
        $cargo  = Cargo::All();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Postulante')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $postulante->id;
        $lastActivity->save();

        return redirect()->route('postulantes.index',compact('cargo'));
    }




    public function edit($id)
    {
        $postulante = Postulante::find($id);
        $cargo  = Cargo::All();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Postulante')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $postulante->id;
        $lastActivity->save();
        return view('postulantes.editar', compact('postulante','cargo'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Email' => 'required',
            'Celular' => 'required',
            'idCargo'=>'required',
        ]);

        $input = $request->all();
        $postulante = Postulante::find($id);
        $postulante->update($input);
        $cargo  = Cargo::All();
        return redirect()->route('postulantes.index',compact('cargo'));
    }


    public function destroy($id)
    {
        $postulante = Postulante::find($id);
        $cargo  = Cargo::All();
        if ($postulante) {
            date_default_timezone_set("America/La_Paz");
            activity()->useLog('Postulante')->log('Eliminó')->subject();
            $lastActivity = Activity::latest()->first();
            $subjectId = $postulante->id;
            $lastActivity->subject_id = $subjectId;
            $lastActivity->save();
            $postulante->delete();
        } else {
            return redirect()->route('postulantes.index',compact('cargo'))->with('error', 'Postulante no encontrado');
        }
        return redirect()->route('postulantes.index',compact('cargo'));
    }
    

    /*public function pdf(Personal $personals)
    {

        $empleado = Empleado::all();

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Empleado')->log('Generó reporte')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $empleado->id;
        $lastActivity->save();

        $pdf =PDF::loadView('Empleado.pdf', compact('empleado','empleados'));
        return $pdf->download('Empleado-'.$empleados->id.'.pdf');
    }*/
}
