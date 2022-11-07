<?php

namespace App\Http\Controllers;

use App\Models\Designacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Docente;
use App\Models\Estudio;
use DB;
/**
 * Class DesignacionController
 * @package App\Http\Controllers
 */
class DesignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designacions = Designacion::paginate();

        return view('designacion.index', compact('designacions'))
            ->with('i', (request()->input('page', 1) - 1) * $designacions->perPage());
    }
    public function pdf()
    {
        $designacions = Designacion::paginate();
        $pdf = PDF::loadView('designacion.pdf', ['designacions'=>$designacions]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        
       //return view('designacion.pdf', compact('designacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designacion = new Designacion();

        $docentes = Docente::all('Nombres','id');
        $estudios = Estudio::pluck('Materia', 'id');

    
        return view('designacion.create', compact('designacion', 'docentes', 'estudios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Designacion::$rules);

        $designacion = Designacion::create($request->all());

        return redirect()->route('designacions.index')
            ->with('success', 'Designacion creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $designacion = Designacion::find($id);
       
        return view('designacion.show', compact('designacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $designacion = Designacion::find($id);
        $docentes = Docente::pluck('Nombres', 'id');

        return view('designacion.edit', compact('designacion','docentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Designacion $designacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designacion $designacion)
    {
        request()->validate(Designacion::$rules);

        $designacion->update($request->all());

        return redirect()->route('designacions.index')
            ->with('success', 'Designacion actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $designacion = Designacion::find($id)->delete();

        return redirect()->route('designacions.index')
            ->with('success', 'Designacion eliminada exitosamente');
    }
}
