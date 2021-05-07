<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categoria = Categoria::where('estado', 1)->paginate(1);
        return view('admin/categoria/index')->with('categoria', $categoria);
    }

}
