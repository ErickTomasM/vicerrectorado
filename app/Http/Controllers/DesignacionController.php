<?php

namespace App\Http\Controllers;

use App\Models\Designacion;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$designacion = new Designacion();
        $designacion = new Designacion();
        $gestion = ['','2022','2023', '2024','2025', '2026','2027', '2028','2029', '2030'];
        $facultad = ['','Derecho', 'Ciencias Economicas Financieras Administrativas', 'Ciencias Puras','Ciencias Sociales Humanisticas', 'Ciencias de la Salud', 'Ciencias Agricolas Pecuarias',
        'Ingenieria', 'Ingenieria Minera','Ingenieria Geologica', 'Artes','Ingenieria Tecnologica', 'Medicina'];
        $semestre =[['','Gestion Academica', 'Semestre I', 'semestre II']];
       
        return view('designacion.create', compact('designacion', 'gestion', 'facultad', 'semestre'));
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
            ->with('success', 'Designacion created successfully.');
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
        $gestion = ['','2022','2023', '2024','2025', '2026','2027', '2028','2029', '2030'];
        $facultad = ['','Derecho', 'Ciencias Economicas Financieras Administrativas', 'Ciencias Puras','Ciencias Sociales Humanisticas', 'Ciencias de la Salud', 'Ciencias Agricolas Pecuarias',
        'Ingenieria', 'Ingenieria Minera','Ingenieria Geologica', 'Artes','Ingenieria Tecnologica', 'Medicina'];
        $semestre =[['','Gestion Academica', 'Semestre I', 'semestre II']];

        return view('designacion.edit', compact('designacion', 'gestion', 'facultad', 'semestre'));
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
            ->with('success', 'Designacion updated successfully');
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
            ->with('success', 'Designacion deleted successfully');
    }
}
