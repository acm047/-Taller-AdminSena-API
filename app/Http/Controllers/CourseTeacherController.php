<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use Illuminate\Http\Request;

class CourseTeacherController extends Controller
{
    public function index()
    {
        return response()->json(CourseTeacher::all(), 200);
    }

    public function store(Request $request)
    {
        $courseTeacher = CourseTeacher::create($request->all());

        return response()->json($courseTeacher, 201);
    }

    public function show($id)
    {
        $courseTeacher = CourseTeacher::findOrFail($id);

        return response()->json($courseTeacher, 200);
    }

    public function update(Request $request, $id)
    {
        $courseTeacher = CourseTeacher::findOrFail($id);

        $courseTeacher->update($request->all());

        return response()->json($courseTeacher, 200);
    }

    public function destroy($id)
    {
        CourseTeacher::destroy($id);

        return response()->json([
            'message' => 'Eliminado correctamente'
        ], 200);
    }
}
