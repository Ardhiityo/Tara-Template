<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MerchantUpdateRequest;

class MerchantController extends Controller
{
    public function edit(Merchant $merchant)
    {
        return view('pages.merchant.edit', compact('merchant'));
    }

    public function update(MerchantUpdateRequest $request, Merchant $merchant)
    {
        // $validated = $request->validated();

        // $merchant->update([
        //     'biography' => $validated['biography'],
        //     'phone' => $validated['phone'],
        //     'status' => $validated['status']
        // ]);

        // $merchant->user()->update([
        //     'name' => $validated['name']
        // ]);

        return redirect()->route('dashboard');
    }

    public function show(Merchant $merchant)
    {
        // $merchant->load('user');
        // return view('pages.merchant.show', compact('merchant'));

        // Dummy
        return view('pages.merchant.show');
    }

    public function destroy(Merchant $merchant)
    {
        // $merchant->load('services');

        // foreach ($merchant->services as $service) {
        //     Storage::disk('public')->delete($service->photo);
        // }

        // $merchant->user()->delete();

        return redirect()->route('dashboard');
    }
}
