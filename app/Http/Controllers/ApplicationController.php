<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Client;
use App\Models\Status;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $applications = Application::paginate(10);

        return view('application.index', compact('applications'))
            ->with('i', ($request->input('page', 1) - 1) * $applications->perPage());
    }

    //Solicitudes por estado

    public function approvedApplications() {
        $applications = Application::where('status_id', 2)->get();
        return view('application.approved', compact('applications'));
    }    

    public function pendingApplications() {
        $applications = Application::where('status_id', 1)->get();
        return view('application.pending', compact('applications'));
    }

    public function rejectedApplications() {
        $applications = Application::where('status_id', 3)->get();
        return view('application.rejected', compact('applications'));
    }
    

    //Cambiar el estado de la solicitud

    public function editStatus($id) {
        $application = Application::findOrFail($id);
        $statuses = Status::all(); // Carga todos los estados para la selección
        return view('application.change-status', compact('application', 'statuses'));
    }
    
    public function updateStatus(Request $request, $id) {
        $request->validate([
            'status_id' => 'required|exists:statuses,id',
        ]);
    
        $application = Application::findOrFail($id);
        $application->status_id = $request->input('status_id');
        $application->save();
    
        return redirect()->route('applications.pending')->with('status', 'Estado de la solicitud actualizado con éxito.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $application = new Application();
        $statuses = Status::all();
        $clients = Client::all();

        return view('application.create', compact('application', 'clients', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ApplicationRequest $request): RedirectResponse
    {
        Application::create($request->validated());

        return Redirect::route('applications.index')
            ->with('success', 'Application created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $application = Application::find($id);

        return view('application.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $application = Application::find($id);
        $statuses = Status::all();
        $clients = Client::all();

        return view('application.edit', compact('application', 'statuses', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ApplicationRequest $request, Application $application): RedirectResponse
    {
        $application->update($request->validated());

        return Redirect::route('applications.index')
            ->with('success', 'Application updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Application::find($id)->delete();

        return Redirect::route('applications.index')
            ->with('success', 'Application deleted successfully');
    }

}
