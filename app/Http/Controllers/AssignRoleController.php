<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AssignRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //mostrar los roles
        $user = User::find($id);
        $roles = Role::all();

        $userRoles = $user->roles->pluck('id')->toArray();

        return view('admin.user-roles', compact('user', 'roles', 'userRoles'));
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
        //agregar rol a los usuarios
        $user = User::find($id);
        $rolesId = $request->input('roles', []);

        $roles = Role::wherein('id', $rolesId)->pluck('name')->toArray();

        $user->syncRoles($roles);

        return redirect()->route('admin.user')->with('success', 'Roles actualizados exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
