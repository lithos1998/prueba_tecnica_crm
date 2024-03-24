<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class UserController extends Controller
{
    // Devuelve los usuario del sistema en formato JSON
    public function index()
    {
        $users = User::all();

        return response()->json($users);  
    }


    // Muestra vista principal con todos los usuarios
    public function showIndex()
    {
        return view('users.index');
    }

    
    // Muestra formulario para crear un nuevo usuario
    public function create()
    {
       return view('users.create');
    }

    
    // Almacena un nuevo usuario en la base de datos
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

    
    // Muestra la informacion del usuario (solo usuario logeado)
    public function show(User $user)
    {   
        if ($user->id == Auth::user()->id) {
            return view('users.show', ['user'=>Auth::user()]);
        }else{
            return redirect('/');
        }
    }

   
    // Muestra formulario para editar al usuario
    public function edit()
    {
        return view('users.edit', ['user'=>Auth::user()]);
    }

    
    // Actualiza los datos del usuario
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

    
    // Se elimina al usuario 
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
