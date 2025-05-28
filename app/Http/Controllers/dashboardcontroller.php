<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Citizen;

class dashboardcontroller extends Controller
{
    

public function index()
{


    $totalciudades = City::count();
    $totalciudadanos = Citizen::count();

    $ciudadanosporciudad = City::withCount('citizens')
        ->orderBy('name')
        ->get();
    return view('dashboard', compact('totalciudades' , 'totalciudadanos', 'ciudadanosporciudad'));
} 


}