<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Http\Requests\PhoneRequest; 

class PhoneController extends Controller
{
    public function index()
    {
        return response()->json(Phone::all(), 200);
    }

    public function store(PhoneRequest $request) 
{
    $phone = Phone::create($request->validated()); 
    return response()->json($phone, 201); 
}

    public function show($id)
    {
        $phone = Phone::find($id);
        if (!$phone) {
            return response()->json(['message' => 'Teléfono no encontrado'], 404);
        }
        return response()->json($phone, 200);
    }

    public function update(PhoneRequest $request, $id) 
    {
        $phone = Phone::find($id);
        if (!$phone) {
            return response()->json(['message' => 'Teléfono no encontrado'], 404);
        }
        $phone->update($request->validated()); 
        return response()->json($phone, 200);
    }

    public function destroy($id)
    {
        $phone = Phone::find($id);
        if (!$phone) {
            return response()->json(['message' => 'Teléfono no encontrado'], 404);
        }
        $phone->delete();
        return response()->json(['message' => 'Teléfono eliminado'], 200);
    }
}
