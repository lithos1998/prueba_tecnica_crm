<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $data ;

    public function index()
    {
        $users = User::all();

        return response()->json($users);  
    }

    public function showIndex()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {   
        $data = $request->validated();
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'remember_token' => Str::random(10),
        ]);
        
        return redirect('/')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {   
        // con esta logica cada usuario puede ver unicamente su informacion
        if ($user->id == Auth::user()->id) {
            return view('users.show', ['user'=>Auth::user()]);
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user'=>Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'            
        ]);

        if($request->password != null){
            // La contraseña solo se actualiza si el usuario completa ese campo
           if(strlen($request->password) < 8 ){
                // Se chequea la validez de la contraseña
                return Redirect::back()->withErrors(['La contraseña debe contener minimo 8 caracteres']);
           }
        
            $data['password'] = Hash::make($request->password);
        }
       
        $user->update($data);

        return redirect('usuarios')->with('success', 'Tus datos se actualizaron correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        
        if ($user->clients()) {
            // Elimina los clientes asociados a este usuario si los hubiese
            $clients = $user->clients();
            
            $clients->delete();
        }

        return redirect('/');
    }
}
