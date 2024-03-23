<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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

    public function showIndex()
    {
        return view('clients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $data = $request->validated();

        $client = Client::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'age' => $data['age'],
            'phone' => $data['phone'],
            'status' => $data['status'],
        ]);

        $client->users()->attach(Auth::id());
        
        return redirect('clientes')->with('success', 'El cliente se añadio correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client'=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClientRequest $request, Client $client)
    {
        $data = $request->validated();

        $client->update($data);

        return redirect('clientes')->with('success', 'El cliente se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('clientes')->with('success', 'El cliente se elimino correctamente');
    }

    

}
