<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Consultore;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Designacion;
use App\Models\Estudio;

/**
 * Class ConsultoreController
 * @package App\Http\Controllers
 */
class ConsultoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultores = Consultore::paginate();

        return view('consultore.index', compact('consultores'))
            ->with('i', (request()->input('page', 1) - 1) * $consultores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultore = new Consultore();

        $plan = Estudio::pluck('Materia', 'id');
        $dedicacion = ['','A Tiempo Completo', 'A Tiempo Horario'];
        $docente = Docente::pluck('Nombres', 'id');
        $designacion = Designacion::pluck('Dictamen', 'id');

        return view('consultore.create', compact('consultore', 'plan', 'dedicacion', 'docente', 'designacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consultore::$rules);
        //$consultore = Consultore::create($request->all());

        $consultore = request()->except('_token');
        if($request->hasFile('contrato')){
            
            //$consultore ['contrato'] = Storage::disk('public')->get('');
            //$file = Storage::disk('public')->get($consultore);
            $consultore['contrato'] = $request->file('contrato')->store('pubilc');
            

        }
        Consultore::insert($consultore);
        return redirect()->route('consultores.index')
            ->with('success', 'Consultore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $consultore = Consultore::find($id);

        return view('consultore.show', compact('consultore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultore = Consultore::find($id);

        $plan = Estudio::pluck('Materia', 'id');
        $dedicacion = ['','A Tiempo Completo', 'A Tiempo Horario'];
        $docente = Docente::pluck('Nombres', 'id');
        $designacion = Designacion::pluck('Dictamen', 'id');

        return view('consultore.edit', compact('consultore', 'plan', 'docente', 'dedicacion', 'designacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consultore $consultore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultore $consultore)
    {
        request()->validate(Consultore::$rules);

        $consultore->update($request->all());

        return redirect()->route('consultores.index')
            ->with('success', 'Consultore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consultore = Consultore::find($id)->delete();

        return redirect()->route('consultores.index')
            ->with('success', 'Consultore deleted successfully');
    }
}
