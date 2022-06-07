<?php

namespace App\Http\Controllers;
use App\contatos;
use App\empresa;

use Illuminate\Http\Request;

class ContatosController extends Controller
{

    public $contato;
    public $emp;

    public function __construct()
    {
        $this->contato = new Contatos;
        $this->emp = new Empresa;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listar = $this->contato->all();        
        return view('index', compact('listar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empDados = $this->emp->all();
        return view('create', compact('empDados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = $this->contato->create([
            'nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome,
            'data'=>$request->data,
            'telefone'=>$request->telefone,
            'celular'=>$request->celular,
            'id_empresa'=>$request->id_empresa,
            'email'=>$request->email,
        ]);

        if($insert)
        {
            return redirect()->route('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contatoEdit = $this->contato->find($id);
        $empEdit = $this->emp->all();
        return view('edit', compact('contatoEdit', 'empEdit'));
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
        $this->contato->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome,
            'data'=>$request->data,
            'telefone'=>$request->telefone,
            'celular'=>$request->celular,
            'id_empresa'=>$request->id_empresa,
            'email'=>$request->email,
        ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletar_contato = $this->contato->find($id);
        $deletar_contato->delete();
        return redirect()->route('index');
    }

    public function delete($id)
    {
        $contatoDel = $this->contato->find($id);       
        return view('delete', compact('contatoDel'));
    }
}
