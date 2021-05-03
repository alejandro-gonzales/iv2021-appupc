<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index(){
        $rol = Rol::where('estado', 1)->paginate(1);
        return view('admin/rol/index')->with('rol', $rol);
    }
}
