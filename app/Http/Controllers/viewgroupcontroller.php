<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Citizen;

class viewgroupcontroller extends Controller
{
    public function index()
    {
        $ciudades = City::with(['citizens' => function ($query){
        $query->orderBy('first_name', 'asc')->orderBy('last_name', 'asc');  
        }])->orderBy('name')->get();

        return view('viewgroup', compact('ciudades'));

    }
}
