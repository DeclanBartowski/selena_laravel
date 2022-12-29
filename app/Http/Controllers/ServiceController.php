<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('active', true)
            ->orderBy('sort', 'asc')
            ->get();
        return view('services.list', compact('services'));
    }


    /**
     * Display the specified resource.
     *
     * @param  Service $service
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('services.detail', compact('service'));
    }

}
