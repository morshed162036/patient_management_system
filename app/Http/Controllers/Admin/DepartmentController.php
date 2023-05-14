<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        // if(!request()->user()->hasPermission('department.index')){
        //     return 'true';
        // }
        // else{
        //    // return 'false';
        //      abort(401);
        // }
        $departments = Department::all();
        return view("backend.department.index")->with(compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'department_name' => 'required',
            'department_description' => 'required',
        ]);
        $department = new Department();
        $department->name = $request->department_name;
        $department->description = $request->department_description;
        $department->status = $request->status;
        $department->save();
        
        return redirect(route('department.index'))->with('success','Department Create Successfully..');
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
        $department = Department::findorFail($id);
        return view('backend.department.edit')->with(compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation = $request->validate([
            'department_name' => 'required',
            'department_description' => 'required',
        ]);
        $department = Department::findorFail($id);
        if($department != null){
            $department->name = $request->department_name;
            $department->description = $request->department_description;
            $department->status = $request->status;
            $department->update();
            
            return redirect(route('department.index'))->with('success','Department Update Successfully Done..');
        }
        return redirect(route('department.index'))->with('error','Department Update Failed..');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::where('id',$id)->delete();
        $message  = "Department Delete Successfully Done";
        return redirect()->back()->with("success",$message);
    }
}
