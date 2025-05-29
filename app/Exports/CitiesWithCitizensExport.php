<?php
namespace App\Exports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CitiesWithCitizensExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return City::withCount('citizens')->get()->flatMap(function ($city) {
          return $city->citizens->map(function ($citizen) use ($city) {
                return [
                    'city' => $city->name,
                    'ciudadanos totales' => $citizen->first_name . ', ' . $citizen->last_name,
                ];
            });
    
    });
    }

    public function headings(): array
    {
        return ['Ciudad', 'Ciudadanos'];
    }
}
