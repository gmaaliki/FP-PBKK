<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceReport;
use App\Models\Service;

class AdminController extends Controller
{
    public function index($id)
    {
        $service = Service::find($id);
        $reports = ServiceReport::all();
        return view('admin', compact('reports', 'service'));
    }
}
