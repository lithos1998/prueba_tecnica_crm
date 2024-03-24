<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    // Devuelve los clientes del usuario logeado en formato JSON
    public function index(Request $request)
    {
        if (Auth::check()) {            
            $user = $request->user();
            
            $clients = $user->clients()->get();
        }else{
            return response()->json(['error'=> 'Usuario no autenticado'], 401);
        }
    
        return response()->json($clients);
    }


    // Muestra la vista principal con todos los clientes
    public function showIndex()
    {
        return view('clients.index');
    }


    // Muestra el formulario de creacion de cliente
    public function create()
    {
        return view('clients.create');
    }

    
    // Almacena un nuevo cliente en la base de datos
    public function store(StoreClientRequest $request)
    {
        $data = $request->validated();

        $client = Client::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'age' => $data['age'],
            'phone' => $data['phone'],
            'status' => $data['status']
        ]);

        $client->users()->attach(Auth::id());
        
        return redirect('clientes')->with('success', 'El cliente se añadio correctamente');
    }

   
    // Muestra el dato de un cliente en especifico
    public function show(Client $client)
    {
        return view('clients.show', ['client'=>$client]);
    }

    
    // Muestra formulario para editar un cliente
    public function edit(Client $client)
    {
        return view('clients.edit', ['client'=>$client]);
    }

    
    // Actualiza los datos de un cliente
    public function update(StoreClientRequest $request, Client $client)
    {
        $data = $request->validated();

        $client->update($data);

        return redirect('clientes')->with('success', 'El cliente se edito correctamente');
    }

    
    // Se elimina el clientes
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('clientes')->with('success', 'El cliente se elimino correctamente');
    }

    

}
