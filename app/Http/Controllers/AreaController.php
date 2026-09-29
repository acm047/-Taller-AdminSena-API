<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Mostrar todas las áreas.
     */
    public function index()
    {
        return response()->json(Area::all(), 200);
    }

    /**
     * Crear una nueva área.
     */
    public function store(Request $request)
    {
        $area = Area::create($request->all());

        return response()->json($area, 201);
    }

    /**
     * Mostrar un área específica.
     */
    public function show($id)
    {
        $area = Area::findOrFail($id);

        return response()->json($area, 200);
    }

    /**
     * Actualizar un área.
     */
    public function update(Request $request, $id)
    {
        $area = Area::findOrFail($id);

        $area->update($request->all());

        return response()->json($area, 200);
    }

    /**
     * Eliminar un área.
     */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);

        $area->delete();

        return response()->json([
            'message' => 'Área eliminada correctamente'
        ], 200);
    }
}
