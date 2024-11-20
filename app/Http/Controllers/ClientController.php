<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $clients = Client::paginate(10);
        return view('client.index', compact('clients'))
            ->with('i', ($request->input('page', 1) - 1) * $clients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $client = new Client();

        return view('client.create', compact('client'));
    }

    /**
     * creando un nuevo cliente
     */
    public function store(ClientRequest $request): RedirectResponse
    {
        
        //Se crea un nuevo cliente
        Client::create($request->validated());
        $client = Client::create($request->validated());

        //se crea una solicitud para el nuevo cliente
        Application::create([
            'client_id' => $client->id,
        ]);

        return Redirect::route('clients.index')
            ->with('success', 'Nuevo cliente creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->validated());

        return Redirect::route('clients.index')
            ->with('success', 'Cliente actualizado con exito');
    }

    public function destroy($id): RedirectResponse
    {
        Client::find($id)->delete();

        return Redirect::route('clients.index')
            ->with('success', 'Cliente eliminado con exito');
    }
}
