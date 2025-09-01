<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        // $services = Service::whereHas('merchant', function ($query) {
        //     $query->where('status', 'active');
        // })->paginate(5);

        // if ($keyword = $request->query('keyword')) {
        //     $services = Service::whereHas('merchant', function ($query) {
        //         $query->where('status', 'active');
        //     })->whereLike('title', "%$keyword%")->paginate(5);
        // }

        // return view('index', compact('services'));

        // Dummy
        return view('index');
    }

    public function show(Service $service)
    {
        // $service->load('merchant.user');
        // return view('show', compact('service'));

        // Dummy
        return view('show');
    }
}
