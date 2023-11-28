<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $subjects = Subject::all();
            
            return view('subjects.index',compact('subjects'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Subject::create([
            'subject_code' => $request->subject_code,
            'subject_name' => $request->subject_name,
            'lecturer_name' => $request->lecturer_name,
            
        ]);

        return redirect(route('subjects.index'))->with('message', 'subject has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show( $subjects)
    {
        $subject = Subject::findOrFail($subjects);
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $subject)
    {
        $subject = Subject::findOrFail($subject);
        
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->update([
            'subject_code' => $request->subject_code,
            'subject_name' => $request->subject_name,
            'lecturer_name' => $request->lecturer_name,
            'updated_at' => now(),
        ]);

        return redirect()->route('subjects.index')->with('message', 'Subject has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect(route('subjects.index'))->with('message', 'Subject has been deleted');

    }
}
