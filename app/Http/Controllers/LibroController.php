<?php

namespace App\Http\Controllers;
use App\Models\libro;


use Illuminate\Http\Request;

class LibroController extends Controller
{

    public function index(){
        $libros = libro::all();
        return view('Libros11.index', compact('libros'));
    }


    public function create(){
        return view('Libros11.create');
    }

    public function store(Request $request){
        $libros = new libro();
        $libros->codigo = $request->codigo;
        $libros->titulo = $request->titulo;
        $libros->isbn = $request->isbn;
        $libros->editorial = $request->editorial;
        $libros->paginas = $request->paginas;
        $libros->save();

        return redirect()->route('libros.create');  ///
    }

    public function show($id){
        $libros = libro::find($id);
        return view('Libros11.show', compact('libros'));
    }

    public function edit($id){
        $libros = libro::find($id);
        return view('Libros11.edit', compact('libros'));
    }

    public function update(Request $request, libro $libros){
        $libros->update($request->all());
        return redirect()->route('libros.index');
    }

   public function destroy($id){

    $libro = Libro::findOrFail($id);
    $libro->delete();
    return redirect()->route('libros.index');
   }
}