<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        #ARRAY ASSOCIATIVO
        #return view('site.teste', ['p1' => $p1, 'p2' => $p2]);

        #METODO COMPACT
        #return view('site.teste', compact('p1', 'p2'));

        #METODO WITH
        return view('site.teste')->with('p1', $p1)->with('p2', $p2);
    }
}
