<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $halls = Hall::all();
            
            return view('hall.index',compact('halls'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hall.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Hall::create([
        'lecture_hall_name' => $request->lecture_hall_name,
        'lecture_hall_place' => $request->lecture_hall_place,
    ]);

    return redirect(route('halls.index'))->with('message', 'hall has been created');
}


    /**
     * Display the specified resource.
     */
    public function show( $hall)
    {
        $hall = Hall::findOrFail($hall);
        return view('hall.show', compact('hall'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $hall)
    {
        $hall = Hall::findOrFail($hall);
        
        return view('hall.edit', compact('hall'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hall $hall)
    {
        $hall->update([
            'lecture_hall_name' => $request->lecture_hall_name,
            'lecture_hall_place' => $request->lecture_hall_place,
            'updated_at' => now(),
        ]);

        return redirect()->route('halls.index')->with('message', 'hall has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hall $hall)
    {
        $hall->delete();

        return redirect(route('halls.index'))->with('message', 'hall has been deleted');

    }
}