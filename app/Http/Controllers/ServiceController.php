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
        $services = new Service();

        return view('services.create', ['service' => $services]);
    }

    public function show($id) {

        $service = Service::findOrFail($id);

        return view('services.show', ['service' => $service]);
    }

    public function store(Request $request) 

    {
        $service = new Service();

        $service->description = request('description');

        $service->save();

        return redirect('/services')->with('messg', 'Data was Successfully saved');
    }

    public function update($id)
    {
        $service = Service::findOrFail($id);

        $Data = request();
        $service->description = $Data['description'];
        $service->save();
        return redirect('services');
    }

    public function edit($id)
    {
        
        $service = Service::findOrFail($id);

        return view('services.update', ['service' => $service]);
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect('/services')->with('Success', 'Data was successfully deleted');
    }
}
