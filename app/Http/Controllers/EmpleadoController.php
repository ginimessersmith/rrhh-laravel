<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Cargo;
use Spatie\Activitylog\Models\Activity;


class EmpleadoController extends Controller
{
    public function index(Request $request)
    {
        $empleado = Empleado::All();
        $cargo  = Cargo::All();
        return view('empleados.index', compact('empleado','cargo'));
    }

    public function create()
    {   
        $cargo  = Cargo::All();
        return view('empleados.crear',compact('cargo'));
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

        $empleado = Empleado::create($request->all());
        $cargo  = Cargo::All();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Empleado')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $empleado->id;
        $lastActivity->save();

        return redirect()->route('empleados.index',compact('cargo'));
    }




    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $cargo  = Cargo::All();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Empleado')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $empleado->id;
        $lastActivity->save();
        return view('empleados.editar', compact('empleado','cargo'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Email' => 'required|email',
            'Celular' => 'required',
            'idCargo'=>'required',
        ]);

        $input = $request->all();
        $empleado = Empleado::find($id);
        $empleado->update($input);
        $cargo  = Cargo::All();
        return redirect()->route('empleados.index',compact('cargo'));
    }


    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $cargo  = Cargo::All();
        if ($empleado) {
            date_default_timezone_set("America/La_Paz");
            activity()->useLog('Empleado')->log('Eliminó')->subject();
            $lastActivity = Activity::latest()->first();
            $subjectId = $empleado->id;
            $lastActivity->subject_id = $subjectId;
            $lastActivity->save();
            $empleado->delete();
        } else {
            return redirect()->route('empleados.index',compact('cargo'))->with('error', 'Empleado no encontrado');
        }
        return redirect()->route('empleados.index',compact('cargo'));
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
