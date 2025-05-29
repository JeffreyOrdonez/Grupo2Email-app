<?php

namespace App\Http\Controllers;

use App\Exports\CitiesExport;
use Illuminate\Http\Request;
use App\Models\City;
use App\Mail\ReportGroupMail;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ReportGroupcontroller extends Controller
{
    public function send_report(Request $request)
    {
        $user = $request->user();
        $email = $user->email;

        // Genera el archivo Excel en memoria
        $excel = Excel::raw(new CitiesExport, \Maatwebsite\Excel\Excel::XLSX);

        // Envía el correo con el archivo adjunto
        Mail::to($email)->send(
            (new ReportGroupMail('Aquí tienes el reporte de ciudades y ciudadanos'))
                ->attachData($excel, 'ciudades_y_ciudadanos.xlsx', [
                    'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                ])
        );

        return redirect()->route('viewgroup')->with('success', 'Reporte enviado con éxito');
    }

    public function citiesExport()
    {
        return Excel::download(new CitiesExport, 'ciudades.xlsx');
    }
}