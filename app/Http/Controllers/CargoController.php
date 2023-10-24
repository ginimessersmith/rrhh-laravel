<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use Spatie\Activitylog\Models\Activity;


class CargoController extends Controller
{
    public function index(Request $request)
    {
        $cargo = Cargo::All();
        return view('cargos.index', compact('cargo'));
    }

    public function create()
    {
        return view('cargos.crear');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Descripcion' => 'required',
        ]);

        $cargo = Cargo::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Cargo')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $cargo->id;
        $lastActivity->save();

        return redirect()->route('cargos.index');
    }




    public function edit($id)
    {
        $cargo = Cargo::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Cargo')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $cargo->id;
        $lastActivity->save();
        return view('cargos.editar', compact('cargo'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Nombre' => 'required',
            'Descripcion' => 'required',
        ]);

        $input = $request->all();
        $cargo = Cargo::find($id);
        $cargo->update($input);

        return redirect()->route('cargos.index');
    }


    public function destroy($id)
    {
        $cargo = Cargo::find($id);
    
        if ($cargo) {
            date_default_timezone_set("America/La_Paz");
            activity()->useLog('Cargo')->log('Eliminó')->subject();
            $lastActivity = Activity::latest()->first();
            $subjectId = $cargo->id;
            $lastActivity->subject_id = $subjectId;
            $lastActivity->save();
            $cargo->delete();
        } else {
            return redirect()->route('cargos.index')->with('error', ' no se encontra el cargo');
        }
        return redirect()->route('cargos.index');
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
