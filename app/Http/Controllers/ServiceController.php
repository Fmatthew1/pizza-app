<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Pizza;
use App\Service;

class ServiceController extends Controller
{
    public function index() {

        $services = Service::all();

        return view('services.index', [
            'services' => $services,
        ]);

    }

    public function create() {

        return view('services.create');
    }

    public function store(Request $request) 

    {
        $service = new Service();

        $service->description = request('description');

        $service->save();

        return redirect('/services')->with('messg', 'Data was Successfully saved');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', ['service' => $service]);
    }
}
