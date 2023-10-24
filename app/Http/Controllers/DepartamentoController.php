<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

//agregamos lo siguiente

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Spatie\Activitylog\Models\Activity;
class DepartamentoController extends Controller
{
    //
    public function index(Request $request)
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    public function create()
    {
        return view('departamentos.crear');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();
        $departamento = Departamento::create($request->all());

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Departamento')->log('Registró')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $departamento->id;
        $lastActivity->save();

        return redirect()->route('departamentos.index');
    }




    public function edit($id)
    {
        $departamento = Departamento::find($id);

        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Departamento')->log('Editó')->subject();
        $lastActivity=Activity::all()->last();
        $lastActivity->subject_id= $departamento->id;
        $lastActivity->save();
        return view('departamentos.editar', compact('departamento'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();
        $departamento = Departamento::find($id);
        $departamento->update($input);

        return redirect()->route('departamentos.index');
    }


    public function destroy($id)
    {
        $departamento = Departamento::find($id);
    
        if ($departamento) {
            date_default_timezone_set("America/La_Paz");
            activity()->useLog('Departamentos')->log('Eliminó')->subject();
            $lastActivity = Activity::latest()->first();
            $subjectId = $departamento->id;
            $lastActivity->subject_id = $subjectId;
            $lastActivity->save();
            $departamento->delete();
        } else {
            return redirect()->route('departamentos.index')->with('error', 'Departamento no encontrado');
        }
        return redirect()->route('departamentos.index');
    }
    
}
