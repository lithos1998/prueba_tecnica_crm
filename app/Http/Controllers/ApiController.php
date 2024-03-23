<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function users(Request $request){
        $users = User::all();

        return response()->json($users);
    }

    public function clients(Request $request){    
        $clients = User::find(2)->clients()->get();

        return response()->json($clients);
    }
}
