<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return response()->json(Teacher::all(), 200);
    }

    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());

        return response()->json($teacher, 201);
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);

        return response()->json($teacher, 200);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->update($request->all());

        return response()->json($teacher, 200);
    }

    public function destroy($id)
    {
        Teacher::destroy($id);

        return response()->json([
            'message' => 'Eliminado correctamente'
        ], 200);
    }
}
