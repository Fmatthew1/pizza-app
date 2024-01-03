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
}
