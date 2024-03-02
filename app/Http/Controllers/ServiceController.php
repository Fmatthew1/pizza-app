<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Pizza;
use App\Service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
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
        
        $request->validate([
           'description' => 'required|unique:services|max:100',
        
     ]);

        $service = new Service();

        $service->description = request('description');

        $service->save();

        return redirect('/services')->with('messg', 'Data was Successfully saved');
    }

    public function update(Request $request, $id)
    {  
        $service = Service::find($id);
        $validator = Validator::make($request->all(), [ 
            'description' => ['required', Rule::unique('services')->ignore($service)]
       ]); 
       if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
       }
       // $data = $request->validate([
         //   'description' => "required|max:100|unique:services",
        // ]); 

        $service = Service::findOrFail($id);

        $data = request();
        $service->id = $data['id'];
        $service->description = $data['description'];
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
