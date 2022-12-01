<?php

namespace App\Http\Controllers;

use App\Models\Titulare;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Estudio;
use App\Models\Designacion;
use Barryvdh\DomPDF\Facade\Pdf;



use DB;

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
        $titulares = Titulare::paginate(10);
        $estudios = Estudio::select('*')->get();
        return view('titulare.index', compact('titulares', 'estudios'))
            ->with('i', (request()->input('page', 1) - 1) * $titulares->perPage());
    }

    public function pdf()
    {
        $titular = Designacion::paginate();
        $pdf = PDF::loadView('titulare.pdf', ['titulares'=>$titular]);
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        
       //return view('designacion.pdf', compact('designacions'));
    }

    public function prueba()
    {
        $pruebas = Estudio::all('Materia.id');
        return view('titulare.index', compact('pruebas'));
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
        $estudio = Estudio::pluck('Materia', 'id');
        $designacion = Designacion::pluck('Dictamen', 'id');
        $dedicacion = ['','A Tiempo Completo', 'A Tiempo Horario'];
        $tipo = ['','Extraordinario','Contratado','Ordinario Titular'];
        return view('titulare.create', compact('titulare', 'docente', 'estudio', 'designacion', 'dedicacion', 'tipo'));
    }

    /**
     * $table->enum('TiposDocente', ['Extraordinario','Contratado','Ordinario Titular'])->default('Extraordinario','Contratado','Ordinario Titular');
     *       $table->enum('Dedicacion', ['A Tiempo Completo', 'A Tiempo Horario'])->default('A Tiempo Completo', 'A Tiempo Horario');
     * 
     * 
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
        $estudios = Estudio::pluck('Materia', 'id');

        return view('titulare.show', compact('titulare', 'estudios'));
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
        $docente = Docente::pluck('Nombres', 'id');
        $estudio = Estudio::pluck('Materia', 'id');
        $designacion = Designacion::pluck('Dictamen', 'id');
        $dedicacion = ['','A Tiempo Completo', 'A Tiempo Horario'];
        $tipo = ['','Extraordinario','Contratado','Ordinario Titular'];

        return view('titulare.edit', compact('titulare', 'docente', 'estudio', 'designacion', 'dedicacion', 'tipo'));
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
