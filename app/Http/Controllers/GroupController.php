<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $groups = Group::all();
            
            return view('groups.index',compact('groups'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Group::create([
            'name' => $request->name,
            'part' => $request->part,
            
        ]);

        return redirect(route('groups.index'))->with('message', 'Group has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show( $group)
    {
        $group = Group::findOrFail($group);
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $group)
    {
        $group = Group::findOrFail($group);
        
        return view('groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $group->update([
            'name' => $request->name,
            'part' => $request->part,
            'updated_at' => now(),
        ]);

        return redirect()->route('groups.index')->with('message', 'Group has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect(route('groups.index'))->with('message', 'Group has been deleted');

    }
}