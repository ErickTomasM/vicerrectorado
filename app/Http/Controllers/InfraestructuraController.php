<?php

namespace App\Http\Controllers;

use App\Models\Infraestructura;
use Illuminate\Http\Request;

/**
 * Class InfraestructuraController
 * @package App\Http\Controllers
 */
class InfraestructuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infraestructuras = Infraestructura::paginate();

        return view('infraestructura.index', compact('infraestructuras'))
            ->with('i', (request()->input('page', 1) - 1) * $infraestructuras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infraestructura = new Infraestructura();
        return view('infraestructura.create', compact('infraestructura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Infraestructura::$rules);

        $infraestructura = Infraestructura::create($request->all());

        return redirect()->route('infraestructuras.index')
            ->with('success', 'Infraestructura creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infraestructura = Infraestructura::find($id);

        return view('infraestructura.show', compact('infraestructura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infraestructura = Infraestructura::find($id);

        return view('infraestructura.edit', compact('infraestructura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Infraestructura $infraestructura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infraestructura $infraestructura)
    {
        request()->validate(Infraestructura::$rules);

        $infraestructura->update($request->all());

        return redirect()->route('infraestructuras.index')
            ->with('success', 'Infraestructura actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $infraestructura = Infraestructura::find($id)->delete();

        return redirect()->route('infraestructuras.index')
            ->with('success', 'Infraestructura eliminada exitosamente');
    }
}
