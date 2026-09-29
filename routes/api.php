<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;

Route::apiResource('areas', AreaController::class);
Route::apiResource('training-centers', TrainingCenterController::class);
Route::apiResource('teachers', TeacherController::class);
Route::apiResource('courses', CourseController::class);
Route::apiResource('course-teachers', CourseTeacherController::class);
Route::apiResource('computers', ComputerController::class);
Route::apiResource('apprentices', ApprenticeController::class);