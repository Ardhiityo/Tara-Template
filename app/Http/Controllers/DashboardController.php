<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // if (Auth::user()->hasRole('merchant')) {
        //     $merchant = Auth::user()->merchant;
        //     $services = Service::where('merchant_id', $merchant->id)->paginate(5);
        //     $merchant_status = ucfirst($merchant->status);
        //     if ($keyword = $request->query('keyword')) {
        //         $services = Service::where('merchant_id', $merchant->id)
        //             ->whereLike('title', "%$keyword%")
        //             ->paginate(5);
        //     }
        //     return view('dashboard', compact('services', 'merchant_status'));
        // }
        // $merchants = Merchant::with('user')->paginate(5);
        // if ($keyword = $request->query('keyword')) {
        //     $merchants = Merchant::with('user')
        //         ->whereHas('user', function ($query) use ($keyword) {
        //             $query->whereLike('name', "%$keyword%");
        //         })->paginate(5);
        // }
        // return view('dashboard', compact('merchants'));

        // Dummy
        return view('dashboard');
    }
}
