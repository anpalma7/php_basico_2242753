<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    // Contralador esta compuesto por acciones.
    // Cada acción estará vinculada a su correspondiente ruta

    public function mostrar_formulario()
    {
        // Mostrar la vista del metabuscador  
        return view('metabuscador');
    }

    // Realizar la busqueda por motor
    public function buscar_termino()
    {
        // Realizar la busuqeda 
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];

        // La busqueda se realiza acorde al motor 
        // de busqueda elegido
        switch ($motor) {
            case 1:
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3:
                return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 5:
                return redirect()->to("https://www.facebook.com/search/top?q=$termino");
                break;
            case 6:
                return redirect()->to("https://listado.mercadolibre.com.co/$termino");
                break;
            case 7:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 8:
                return redirect()->to("https://search.aol.com/aol/search?q=$termino");
                break;
            case 9:
                return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
            case 10:
                return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
        }
    }
}
