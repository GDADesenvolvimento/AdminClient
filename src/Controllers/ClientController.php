<?php

namespace GdaDesenv\AdminClient\Controllers;

use App\Http\Controllers\Controller;
use GdaDesenv\AdminClient\Entities\Client;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function clients()
    {
        $clients = Client::all();
        return view('AdminClient::client.clients',[
            'clients' => $clients
        ]);
    }

    public function form()
    {
        return view('AdminClient::client.form');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:3',
            'email_contato' => 'required|email',
            'email_cobranca' => 'email',
            'telefone_contato' => 'required',
            'endereco' => 'required',
            'numero' => 'required|numeric',
            'complemento' => 'required',
            'bairro' => 'required',
            'municipio' => 'required',
            'uf' => 'required|min:2|max:2',
        ]);

        if ($validator->fails()) {
            return redirect()->route('client.form')->withErrors($validator)->withInput();
        }

        $client = new Client();
        $client->nome = $request->input('nome');
        $client->cnpj = $request->input('cnpj');
        $client->cpf = $request->input('cpf');
        $client->email_contato = $request->input('email_contato');
        $client->email_cobranca = $request->input('email_cobranca');
        $client->telefone_contato = $request->input('telefone_contato');
        $client->telefone_cobranca = $request->input('telefone_cobranca');
        $client->endereco = $request->input('endereco');
        $client->numero = $request->input('numero');
        $client->complemento = $request->input('complemento');
        $client->bairro = $request->input('bairro');
        $client->municipio = $request->input('municipio');
        $client->uf = $request->input('uf');
        $client->save();

        $clients = Client::all();
        return redirect()->route('clients',['clients' => $clients])->with('success', 'Cliente salvo com sucesso!');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('AdminClient::client.edit', compact('client'));
    }

    public function update(Request $request)
    {
        $client = Client::find($request->input('id'));

        $validator = Validator::make($request->all(), [
            'nome' => 'required|min:3',
            'email_contato' => 'required|email',
            'telefone_contato' => 'required',
            'endereco' => 'required',
            'numero' => 'required|numeric',
            'complemento' => 'required',
            'bairro' => 'required',
            'municipio' => 'required',
            'uf' => 'required|min:2|max:2',
        ]);

        if ($validator->fails()) {
            return redirect()->route('client.edit',['id' => $request->input('id')])->withErrors($validator)->withInput();
        }
        
        $client->nome = $request->input('nome');
        $client->cnpj = $request->input('cnpj');
        $client->cpf = $request->input('cpf');
        $client->email_contato = $request->input('email_contato');
        $client->email_cobranca = $request->input('email_cobranca');
        $client->telefone_contato = $request->input('telefone_contato');
        $client->telefone_cobranca = $request->input('telefone_cobranca');
        $client->endereco = $request->input('endereco');
        $client->numero = $request->input('numero');
        $client->complemento = $request->input('complemento');
        $client->bairro = $request->input('bairro');
        $client->municipio = $request->input('municipio');
        $client->uf = $request->input('uf');
        $client->save();

        if($client->save()){
            $clients = Client::all();
            return redirect()->route('clients',['clients' => $clients])->with('success', 'Cliente atualizado com sucesso!');
        }
    }

    public function delete($id)
    {
        Client::destroy($id);
        $clients = Client::all();
        return redirect()->route('clients',['clients' => $clients])->with('success', 'Cliente removido com sucesso!');
    }
}
