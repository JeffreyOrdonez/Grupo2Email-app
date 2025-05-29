<?php

namespace App\Exports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\FromArray;

class CitiesExport implements FromArray
{
    public function array(): array
    {
        $data = [];
        $data[] = ['Ciudad', 'Ciudadano', 'Email'];

        $cities = City::with('citizens')->get();

        foreach ($cities as $city) {
            foreach ($city->citizens as $citizen) {
                $data[] = [
                    $city->name,
                    $citizen->name,
                    $citizen->email,
                ];
            }
        }

        return $data;
    }
}