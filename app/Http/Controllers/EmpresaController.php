<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function index(){
        $empresa = Empresa::where('estado', 1)->paginate(1);
        return view('admin/empresa/index')->with('empresa', $empresa);
    }

    
}

