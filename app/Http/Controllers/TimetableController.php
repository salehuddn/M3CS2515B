<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Hall;
use App\Models\Group;
use App\Models\Subject;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $timetables = Timetable::with(['subject', 'hall', 'user', 'group'])->get();
    
        return view('timetables.index',compact('timetables'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $timetables = Timetable::all();
        $subjects =  Subject::all();
        $days = Day::all();
        $halls = Hall::all();
        $groups = Group::all();
        $students = User::all();

        return view('timetables.create', compact('timetables', 'subjects', 'days', 'halls', 'groups', 'students'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Timetable::create([
        'user_id' => $request->user_id,
        'subject_id' => $request->subject_id,
        'day_id' => $request->day_id,
        'hall_id' => $request->hall_id,
        'lecturer_group_id' => $request->lecturer_group_id,
        'time_from' => $request->time_from,
        'time_to' => $request->time_to,
        
    ]);

    return redirect(route('timetables.index'))->with('message', 'Timetable has been created');
}


    /**
     * Display the specified resource.
     */
    public function show( $timetable)
    {
        $timetable = Timetable::with(['subject', 'hall', 'user', 'group'])->findOrFail($timetable);

        return view('timetables.show', compact('timetable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $timetable)
    {
        $timetable = Timetable::with(['subject', 'hall', 'user', 'group'])->findOrFail($timetable);
        $subjects =  Subject::all();
        $days = Day::all();
        $halls = Hall::all();
        $groups = Group::all();
        $students = User::all();

        return view('timetables.edit', compact('timetable', 'subjects', 'days', 'halls', 'groups', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Timetable $timetable)
    {
        $timetable->update([
            'user_id' => $request->user_id,
            'subject_id' => $request->subject_id,
            'day_id' => $request->day_id,
            'hall_id' => $request->hall_id,
            'lecturer_group_id' => $request->lecturer_group_id,
            'time_from' => $request->time_from,
            'time_to' => $request->time_to,
            'updated_at' => now(),
        ]);

        return redirect()->route('timetables.index')->with('message', 'Timetable has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timetable $timetable)
    {
        $timetable->delete();

        return redirect(route('timetables.index'))->with('message', 'Timetable has been deleted');

    }
}