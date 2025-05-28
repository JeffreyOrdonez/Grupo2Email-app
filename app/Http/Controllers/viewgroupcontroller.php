<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Citizen;

class viewgroupcontroller extends Controller
{
    public function index(Request $request)
    {  $search = $request->input('search');
        $tipo = $request->input('tipo','ciudad'); 

        if ($tipo == 'ciudadano'){
        $ciudades = City::with(['citizens' => function ($query) use ($search){

            if($search){
                $query->where(function ($q) use($search){
                    $q->where('first_name', 'like', "%$search%")->orWhere('last_name', 'like', "%$search%");
                });
            }    
        $query->orderBy('first_name', 'asc')->orderBy('last_name', 'asc');  
        }])
        ->orderBy('name')
        ->get()
        ->filter(function ($ciudad) {
            return $ciudad->citizens->count() > 0;
        });

         }else{
        
         $ciudades = City::with(['citizens' => function ($query){
            $query->orderBy('first_name')->orderBy('last_name');
         }])
         ->when($search, function($query) use ($search){
            $query->where('name', 'like', "%$search%");

         })
         ->orderBy('name')
         ->get();
        }


         
        
        
    
        return view('viewgroup', compact('ciudades'));

    }
}
