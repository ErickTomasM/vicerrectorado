<?php

namespace App\Http\Controllers;

use App\Models\Consultore;
use Illuminate\Http\Request;
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
    public function guardar(Request $request){
        if($request->hasfile("urlpdf")){
            $file=$request->file("urlpdf");
        }

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
        
        return view('consultore.create', compact('consultore','plan', 'dedicacion' ));
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
                 if($request->hasFile('contrato')){
                    $consultore['contrato']=$request->file('contrato')->store('uploads', 'public');
                 }
                  $consultore = Consultore::create($request->all());

        return redirect()->route('consultores.index')
           ->with('success', 'Consultore created successfully.');
         //return  response()->json($consultore);
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

        return view('consultore.edit', compact('consultore'));
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
