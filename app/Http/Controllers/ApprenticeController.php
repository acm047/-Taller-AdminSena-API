<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        return response()->json(Apprentice::all(), 200);
    }

    public function store(Request $request)
    {
        $apprentice = Apprentice::create($request->all());

        return response()->json($apprentice, 201);
    }

    public function show($id)
    {
        $apprentice = Apprentice::findOrFail($id);

        return response()->json($apprentice, 200);
    }

    public function update(Request $request, $id)
    {
        $apprentice = Apprentice::findOrFail($id);

        $apprentice->update($request->all());

        return response()->json($apprentice, 200);
    }

    public function destroy($id)
    {
        Apprentice::destroy($id);

        return response()->json([
            'message' => 'Eliminado correctamente'
        ], 200);
    }
}
