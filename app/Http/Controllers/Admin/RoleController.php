<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('backend.role.index')->with(compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->role_description);
        $role = Role::where('name',$request->role_name)->first();
        if(!is_null($role)){
            return redirect(route('role.index'))->with('error','Role Already Exist..');
        }
        else{
            $role = Role::create(['description'=>$request->role_description,'name'=> $request->role_name]);
            $permissions = $request->role;
            $role->syncPermissions($permissions);
            return redirect(route('role.index'))->with('success','Role Create Successfully done..');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('backend.role.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function permissionToRole(Request $request, Role $role){
            $permissions = $request->role;
            //dd($permissions);
            $role->syncPermissions($permissions);
    }
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
