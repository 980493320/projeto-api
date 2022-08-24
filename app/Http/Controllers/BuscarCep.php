<?php

namespace App\Http\Controllers;

use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\buscarcep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class buscarCepController extends Controller
{

   public function index()
   {
      $enderecos = buscarcep::all();

      return view('buscarcep.listagem')->with(
         [
            'enderecos' => $enderecos,

         ]

      );
   }


   public function adicionar()
   {
      return view('buscarcep.index');
   }

   public function  teste () 
   {

   }

   public function editar(request $request, $id)
   {

      //$buscarcep = buscarcep::find($request->id);
      // $endereco = buscarcep::find($id);
      // $endereco = buscarcep::where('id', $id)->first(); 3 maneiras diferentes de fazer a mesma coisa


      $endereco = buscarcep::find($id);
      return view('buscarcep.editar', compact('endereco'));
   }


   public function excluir(request $request, $id)
   {

      $endereco = $request->id;
      $buscarcep = buscarcep::find($request->id);
      $buscarcep->id = $endereco;
      $buscarcep->delete();

      // buscarcep::findOrFail($id)->delete();

      return redirect('/')->withsucesso(' Endereco Excluido com sucesso');
   }



   public function buscar(Request $request)
   {
      $cep = $request->input('cep');
      $response = Http::get("https://viacep.com.br/ws/$cep/json/")->json();


      return view('buscarcep.adicionar')->with(
         [
            'cep' => $request->input('cep'),
            'logradouro' => $response['logradouro'],
            'bairro' => $response['bairro'],
            'cidade' => $response['localidade'],
            'estado' => $response['uf'],

         ]
      );
   }

   public function salvar(Request $request)
   {
      $endereco = buscarcep::where('cep', $request->input('cep'))->first();

      if (!$endereco) {

         $endereco = buscarcep::create(
            [
               'cep' => $request->input('cep'),
               'logradouro' => $request->input('logradouro'),
               'numero' => $request->input('numero'),
               'bairro' => $request->input('bairro'),
               'cidade' => $request->input('cidade'),
               'estado' => $request->input('estado'),

            ]


         );
         return redirect('/')->withsucesso('Endereco salvo com sucesso');
      }
      return redirect('/')->witherro('O cep já existe');
   }

   public function alterar(Request $request)
   {

      if (!$endereco = buscarcep::find($request->id)) {
         return redirect()->back();
      }
      // dd($request->id);
      $endereco->update($request->all());
      return redirect('/')->withsucesso('Endereco alterado com sucesso');
   }
}
