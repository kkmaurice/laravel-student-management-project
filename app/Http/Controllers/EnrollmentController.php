<?php

namespace App\Http\Controllers;

use App\Models\Enrollemt;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollemt::all();
        return view('enrollments.index', ['courses' => $enrollments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollemt::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments = Enrollemt::find($id);
        return view('enrollments.show', ['enrollments' => $enrollments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments = Enrollemt::find($id);
        return view('enrollments.edit', ['enrollments' => $enrollments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments = Enrollemt::find($id);
        $input =$request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message', 'enrollments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollemt::destroy($id);
        return redirect('enrollments')->with('flash_message', 'enrollments deleted successfully');
    }
}
