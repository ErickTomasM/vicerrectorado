<?php

namespace App\Http\Controllers;

use App\Models\Reasignacion;
use Illuminate\Http\Request;

/**
 * Class ReasignacionController
 * @package App\Http\Controllers
 */
class ReasignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasignacions = Reasignacion::paginate();

        return view('reasignacion.index', compact('reasignacions'))
            ->with('i', (request()->input('page', 1) - 1) * $reasignacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reasignacion = new Reasignacion();
        return view('reasignacion.create', compact('reasignacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reasignacion::$rules);

        $reasignacion = Reasignacion::create($request->all());

        return redirect()->route('reasignacions.index')
            ->with('success', 'Reasignacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reasignacion = Reasignacion::find($id);

        return view('reasignacion.show', compact('reasignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reasignacion = Reasignacion::find($id);

        return view('reasignacion.edit', compact('reasignacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reasignacion $reasignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reasignacion $reasignacion)
    {
        request()->validate(Reasignacion::$rules);

        $reasignacion->update($request->all());

        return redirect()->route('reasignacions.index')
            ->with('success', 'Reasignacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reasignacion = Reasignacion::find($id)->delete();

        return redirect()->route('reasignacions.index')
            ->with('success', 'Reasignacion deleted successfully');
    }
}
