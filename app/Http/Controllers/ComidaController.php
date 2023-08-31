<?php

namespace App\Http\Controllers;


use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate ([
            'name' => 'required|string',
            'description' => 'required|text',
            'price' => 'required|numeric',
        ]);

        $user = Comida::create($data);



        return response()->json([
           'message' => 'User created successfully',
           'user' => $user,
        ],201);
    }

}
