<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function create() {
        return view('auth.resister-client');
    }
    public function store(Request $request) {

        $client = new Client;

        $client->name = $request->name;
        $client->years = $request->years;
        $client->weight = $request->weight;
        $client->gender = $request->gender;
        

        $client->save();

        return redirect('/clients')->with('msg', 'Aluno Cadastrado com sucesso!');

    }
    public function get() {

        $clients = Client::all();

        return view('auth.clients', ['clients' => $clients]);
    }
    public function show($id) {
        $client = Client::FindOrFail($id);
        return view('auth.workout', ['client' => $client]);
    }
    public function destroy($id) {
        Client::findOrFail($id)->delete();

        return redirect('/clients')->with('msg', 'Aluno Deletado com sucesso!');
    }
}