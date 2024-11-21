<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //to do arreglar la validacion
        // Validar los datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'dni' => 'required|string|max:8|unique:employees,dni',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'puesto' => 'required|string|max:255',
        ]);

        dd($validated);

        // Crear el usuario
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Crear el empleado asociado al usuario
        $employee = Employee::create([
            'user_id' => $user->id,
            'nombres' => $validated['nombres'],
            'apellidos' => $validated['apellidos'],
            'dni' => $validated['dni'],
            'fecha_nacimiento' => $validated['fecha_nacimiento'],
            'direccion' => $validated['direccion'],
            'telefono' => $validated['telefono'],
            'puesto' => $validated['puesto'],
        ]);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado exitosamente.');
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
