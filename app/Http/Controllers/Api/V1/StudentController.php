<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentCollection;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return StudentResource::collection(Student::all());
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreStudentRequest $request)
  {
    $student = Student::create($request->validated());

    return StudentResource::make($student);
  }

  /**
   * Display the specified resource.
   */
  public function show(Student $student)
  {
    return StudentResource::make($student);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Student $student)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateStudentRequest $request, Student $student)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Student $student)
  {
    //
  }
}