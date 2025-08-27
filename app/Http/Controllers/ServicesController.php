<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
   public function index()
    {
        // admin se jo services add hui hain, wahi dikhao
        $services = Service::active()->ordered()->get();
        return view('Home.services', compact('services'));
    }

    // Route-Model binding by slug: {service:slug}
    public function show(Service $service)
    {
        abort_unless($service->is_active, 404);
        return view('Home.service_show', compact('service'));
    }
}
