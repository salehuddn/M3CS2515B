<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = User::all();
        

        return view('students.index',compact('students'));
    }

    public function show($id)
    {
        $student = User::findOrFail($id);
        // dd($student);
        return view('students.show', compact('student'));
    }

    public function edit( $id)
    {
        $student = User::findOrFail($id);
        
        return view('students.edit', compact('student'));
    }

    public function update( Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_num,
            'address' => $request->address,
            'updated_at' => now(),
        ]);

        return redirect()->route('students.index')->with('message', 'Student has been updated');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect(route('students.index'))->with('message', 'Student has been deleted');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_num,
            'address' => $request->address,
            

        ]);

        return redirect(route('students.index'))->with('success', 'Student has been created');
    }

}
