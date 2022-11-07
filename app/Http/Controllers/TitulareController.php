<?php

namespace App\Http\Controllers;

use App\Models\Titulare;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Estudio;

/**
 * Class TitulareController
 * @package App\Http\Controllers
 */
class TitulareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulares = Titulare::paginate();

        return view('titulare.index', compact('titulares'))
            ->with('i', (request()->input('page', 1) - 1) * $titulares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulare = new Titulare();
        $docente = Docente::pluck('Nombres', 'id');
        $tipo = Estudio::pluck('Materia', 'id');
        return view('titulare.create', compact('titulare', 'docente', 'tipo'));
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Titulare::$rules);

        $titulare = Titulare::create($request->all());

        return redirect()->route('titulares.index')
            ->with('success', 'Titulare created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulare = Titulare::find($id);

        return view('titulare.show', compact('titulare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulare = Titulare::find($id);

        return view('titulare.edit', compact('titulare'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Titulare $titulare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titulare $titulare)
    {
        request()->validate(Titulare::$rules);

        $titulare->update($request->all());

        return redirect()->route('titulares.index')
            ->with('success', 'Titulare updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $titulare = Titulare::find($id)->delete();

        return redirect()->route('titulares.index')
            ->with('success', 'Titulare deleted successfully');
    }
}
