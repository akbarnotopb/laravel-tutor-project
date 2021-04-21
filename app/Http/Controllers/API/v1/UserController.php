<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json(["data"=>[
            "users"=>$users,
        ]],200);
    }

    public function store(UserStoreRequest $request){
        User::create([
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);

        return response()->json(["data"=>[
            'message'=>"Berhasil!",
        ]]);
    }
}
