<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function __construct() //constructor que guarda el array de peliculas para poder llamarlo en todo el codigo. 
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

    public function buscarPeliculaId($id){
        return (isset($this->peliculas[$id]))?"La pelicula seleccionada es: ".$this->peliculas[$id]:response("No se encontro la pelicula con id: ".$id, 404);
    }

    public function buscarPeliculaNombre($nombre){

        $peliculasEncontradas = [];
        foreach($this->peliculas as $pelicula){
            if (stripos($pelicula, $nombre)!== false){
                $peliculasEncontradas[] = $pelicula;
            }
        }

        if(empty($peliculasEncontradas)){
            return response("No se encontro la pelicula: ".$nombre);
        }

        return view('peliculas')->with($peliculasEncontradas);
    }

}
