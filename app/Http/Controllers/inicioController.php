<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\publicacion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\productos;
use Goutte\Client;



use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class InicioController extends Controller
{
    public function index()
    {
        return view('inicio.index');
    }

    // public function categorias($parametro = null)
    // {
    //     if ($parametro !== null) {
    //         // $productos = Productos::where('categoria', $parametro)->paginate(50);
    //         $productos = Productos::where('categoria', $parametro)
    //         ->select('nombre', 'imagen', \DB::raw('MAX(precio) as precio_maximo'), \DB::raw('MIN(precio) as precio_minimo'))
    //         ->groupBy('nombre', 'imagen')
    //         ->paginate(50);
    //         return view('productos.comprar', ['productos' => $productos]);
    //     }
    //     else
    //         return view('productos.subcategorias');
    // }

    public function inicioCategorias()
    {
        return view('productos.index');
    }

    public function quimicos()
    {
        return view('productos.quimicos');
    }

    public function abrasivos()
    {
        return view('productos.abrasivos');
    }

    public function diamantados()
    {
        return view('productos.corte');
    }

    public function otros()
    {
        return view('productos.otros');
    }

    public function verProducto($parametro = null)
    {
        if ($parametro !== null) {
            $parametro = str_replace('-', ' ', $parametro);
            $producto = Productos::where('nombre', $parametro)->get();

            $precioMinimo = $producto->min('precio');
            $precioMaximo = $producto->max('precio');

            if ($precioMinimo === $precioMaximo) {
                $precioMaximo = null;
            }

            $pesos = [];
            $medidas = [];
            $tipos = [];
            $diametros = [];
            $ejes = [];
            $alturas = [];
            $colores = [];

            foreach ($producto as $product) {
                if($product->peso != null)
                    $pesos[] = $product->peso;
                if($product->medidas != null)
                    $medidas[] = $product->medidas;
                if($product->tipo != null)
                    $tipos[] = $product->tipo;
                if($product->diametro != null)
                    $diametros[] = $product->diametro;
                if($product->eje != null)
                    $ejes[] = $product->eje;
                if($product->altura != null)
                    $alturas[] = $product->altura;
                if($product->color != null)
                    $colores[] = $product->color;
            }

            if(count($pesos) == 0)
                $pesos = null;
            if(count($medidas) == 0)
                $medidas = null;
            if(count($tipos) == 0)
                $tipos = null;
            if(count($diametros) == 0)
                $diametros = null;
            if(count($ejes) == 0)
                $ejes = null;
            if(count($alturas) == 0)
                $alturas = null;
            if(count($colores) == 0)
                $colores = null;

            return view('productos.verProducto', ['producto' => $producto,"precioMinimo"=>$precioMinimo,"precioMaximo"=>$precioMaximo,"pesos" => $pesos,"medidas"=>$medidas,"tipos"=>$tipos,"diametros"=>$diametros,"ejes"=>$ejes,"alturas",$alturas,"colores"=>$colores]);
        }
        else
            return view('productos.verProducto');
    }

    // public function inspiracion()
    // {
    //     $todos = Storage::files('public/imagenes/todos');
    //     $todos = array_map('basename', $todos);
    //     return view('inspiracion.index',["todos"=>$todos]);
    // }

    // public function inspiracionPost(Request $request)
    // {
    //     $carpeta = $request->input('tipo');
    //     $todos = Storage::files('public/imagenes/' . $carpeta);
    //     $todos = array_map('basename', $todos);
    //     return view('inspiracion.index',["todos"=>$todos]);
    // }

    public function inicioContacto()
    {
        return view('inicio.contacto');
    }

    public function productosIndex()
    {
        return view('productos.index');
    }

    public function nosotros()
    {
        return view('nosotros.index');
    }

    public function adhesivos(){
        $productos = productos::all();
        return view('productos.categoria', ["productos" => $productos,"categoria"=>"adhesivos"]);
    }

    public function mostrarTexto()
    {
        $response = Http::get("https://www.abrasivosaguila.com/products/productos/diamantados/");
        if ($response->successful()) {
            $html = $response->body();
            $dom = new \DOMDocument;
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);
            libxml_clear_errors();
            $h3Elements = $dom->getElementsByTagName('h3');

            $textosH3 = [];

            foreach ($h3Elements as $h3Element) {
                $textosH3[] = $h3Element->textContent;
            }

            if (empty($textosH3)) {
                $textosH3[] = 'No se encontró la etiqueta <h3>';
            }

            return view('mostrar-texto', ["textosH3" => $textosH3]);
        } else {
            return response("Error al obtener la página", 500);
        }
    }
    
    public function obtenerSrcDeImagenes()
    {
        $response = Http::get("https://www.abrasivosaguila.com/products/productos/diamantados/"); // Reemplaza con tu URL
        if ($response->successful()) {
            $html = $response->body();
            $dom = new \DOMDocument;
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);
            libxml_clear_errors();
    
            $imagenes = $dom->getElementsByTagName('a');
    
            $srcDeImagenes = [];
    
            foreach ($imagenes as $imagen) {
                $imagenesDentroDeA = $imagen->getElementsByTagName('img');
                foreach ($imagenesDentroDeA as $img) {
                    $src = $img->getAttribute('src');
                    $srcDeImagenes[] = $src;
                }
            }
    
            if (empty($srcDeImagenes)) {
                $srcDeImagenes[] = 'No se encontraron imágenes dentro de las etiquetas <a>';
            }
    
            return view('mostrar-imagenes', ["srcDeImagenes" => $srcDeImagenes]);
        } else {
            return response("Error al obtener la página", 500);
        }
    }    







    public function comprar($categoria = null)
    {        
        $productos = productos::where('categoria', $categoria)->paginate(36);

        return view('productos.comprar', ['productos' => $productos]);
    }
}