<?php

namespace App\Http\Controllers\subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Student;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units=Subject::find(1)->units()->get();
        $subject=Unit::find(2)->subject()->get();
        $activities=Student::find(2)->activities()->get();
        return view('show-subject', compact('units', 'subject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
