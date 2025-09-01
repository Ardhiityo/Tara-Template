<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{
    public function create()
    {
        return view('pages.service.create');
    }

    public function store(ServiceStoreRequest $request)
    {
        // $validated = $request->validated();

        // $validated['slug'] = Str::slug($validated['title']);
        // $validated['merchant_id'] = Auth::user()->merchant->id;
        // $validated['photo'] = $validated['photo']->store('photo', 'public');

        // Service::create($validated);

        return redirect()->route('dashboard');
    }

    public function edit(Service $service)
    {
        // return view('pages.service.edit', compact('service'));

        // Dummy Start
        return view('pages.service.edit');
        // Dummy End
    }

    public function update(ServiceUpdateRequest $request, Service $service)
    {
        // $validated = $request->validated();

        // if (isset($validated['photo'])) {
        //     Storage::disk('public')->delete($service->photo);
        //     $validated['photo'] = $validated['photo']->store('photo', 'public');
        // }

        // $service->update($validated);

        return redirect()->route('dashboard');
    }

    public function show(Service $service)
    {
        // return view('pages.service.show', compact('service'));

        // Dummy Start
        return view('pages.service.show');
        // Dummy End
    }

    public function destroy(Service $service)
    {
        // Storage::disk('public')->delete($service->photo);

        // $service->delete();

        return redirect()->route('dashboard');
    }
}
