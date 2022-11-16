<?php

namespace App\Http\Controllers;

use App\Models\Designacion;
use App\Models\Extraordinario;
use App\Models\Docente;
use App\Models\Estudio;
use Illuminate\Http\Request;

/**
 * Class ExtraordinarioController
 * @package App\Http\Controllers
 */
class ExtraordinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extraordinarios = Extraordinario::paginate();

        return view('extraordinario.index', compact('extraordinarios'))
            ->with('i', (request()->input('page', 1) - 1) * $extraordinarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $extraordinario = new Extraordinario();
        
        $extra = Docente::pluck('Nombres', 'id');
        $resol = Designacion::pluck('Resolucion', 'id');
        $plan = Estudio::pluck('Materia', 'id');
        $c = ["Elija una Opcion","Primera Covocatoria","Segunda Convocatoria", "Tercera Convocatoria", "Por Invitacion"];
        $t = ["Elija una Opcion", "Extraordinario Interino", "Invitado"];
        $d = ["Elija una Opcion", "A Tiempo Completo", "A Tiempo Horario"];
       // $docentesE = Docente::pluck('Nombres','id');
       
        return view('extraordinario.create', compact('extraordinario','extra','resol','plan','c','t','d'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Extraordinario::$rules);

        $extraordinario = Extraordinario::create($request->all());

        return redirect()->route('extraordinarios.index')
            ->with('success', 'Extraordinario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extraordinario = Extraordinario::find($id);

        return view('extraordinario.show', compact('extraordinario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extraordinario = Extraordinario::find($id);
        $extra = Docente::pluck('Nombres', 'id');
        $c = ["Elija una Opcion","Primera Covocatoria","Segunda Convocatoria", "Tercera Convocatoria", "Por Invitacion"];
        $t = ["Elija una Opcion", "Extraordinario Interino", "Invitado"];
        $d = ["Elija una Opcion", "A Tiempo Completo", "A Tiempo Horario"];

        return view('extraordinario.edit', compact('extraordinario','extra','c','t','d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Extraordinario $extraordinario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extraordinario $extraordinario)
    {
        request()->validate(Extraordinario::$rules);

        $extraordinario->update($request->all());

        return redirect()->route('extraordinarios.index')
            ->with('success', 'Extraordinario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $extraordinario = Extraordinario::find($id)->delete();

        return redirect()->route('extraordinarios.index')
            ->with('success', 'Extraordinario deleted successfully');
    }
}
