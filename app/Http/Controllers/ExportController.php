<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CitiesWithCitizensExport;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
    public function exportXLS(){

        return Excel::download(new CitiesWithCitizensExport, 'cities_with_citizens.xlsx');
    }

    public function exportCSV(){

        return Excel::download(new CitiesWithCitizensExport, 'ciudades.csv', \Maatwebsite\Excel\Excel::CSV);
    }

}
