<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Mail\Citizen;
use App\Mail\ReportGroupMail;
use Illuminate\Support\Facades\Mail;

class ReportGroupcontroller extends Controller
{

    public function send_report(Request $request){
$user = $request->user();
$email = $user->email;

$ciudades = City::with(['citizens' => function ($query){
    $query->orderBy('first_name', 'asc')->orderBy('last_name', 'asc');
    }])->orderBy('name')->get();

Mail::to($email)->send(new ReportGroupMail($ciudades));
return redirect()->route('viewgroup')->with('success', 'reporte enviado con exito');
}
}
