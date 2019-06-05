<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{

    public function __construct()
    {
        $this->peliculas = [

            1 => "Toy Story",
            
            2 => "Buscando a Nemo",
            
            3 => "Avatar",
            
            4 => "Star Wars: Episodio V",
            
            5 => "Up",
            
            6 => "Mary and Max"
            
            ];

        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function buscarPeliculaId($id){

        /* 
        SOLUCION DANI:

        return ($peliculas[$id] < 1 && count($peliculas) > 6)?"no se encontro película":"La pelicula seleccionada es: ".$peliculas[$id]; */

        /* SOLUCION ALE: */

        if(isset($this->peliculas[$id])){
            return "La pelicula seleccionada es: ".$this->peliculas[$id];
        }

        return response('no se encontro pelicula', 404);
    }

    public function buscarPeliculaNombre($nombre){

        $resultados = [];

        foreach ($this->peliculas as $pelicula){
            if (stripos($pelicula, $nombre) !== false){
                $resultados[] = $pelicula;   
            }
        }

        if(empty($resultados)) {
            return response('No se encontro la pelicula: '.$nombre);
        }

        return $resultados;

    }
}
