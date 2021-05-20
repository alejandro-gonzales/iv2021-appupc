<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use PDF;

class ClienteController extends Controller
{
    public function index(Request $request){
        if($request->search){
            $clientes = Cliente::where('estado',1)->where('razon_social', 'like', '%'.$request->search.'%')->paginate(3);
        }
        else{
            $clientes = Cliente::where('estado',1)->paginate(3);
        }
        return view('admin/cliente/index')->with('clientes', $clientes);
    }

    public function create(){
        $personas = Persona::where('estado', 1)->get();
        return view('admin/cliente/create')->with('personas', $personas);
    }

    public function store(Request $request){
        $cliente = new Cliente($request->all());
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    public function report(){
        $clientes = Cliente::where('estado', 1)->get();
        $pdf_clientes = PDF::loadView('admin/cliente/report', array('clientes' => $clientes));
        return $pdf_clientes->download('reporte_cliente.pdf');
    }
}
