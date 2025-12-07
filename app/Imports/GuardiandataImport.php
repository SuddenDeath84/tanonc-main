<?php

namespace App\Imports;

use App\Models\Guardian;  
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class GuardiandataImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    
    public function startRow(): int
    {
        return 2;
    }
    
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guardian([
            'gondviseloazon'=>$row[0],
            'oktazon'=>$row[1],
            'telefonszam'=>$row[2],
            'email'=>$row[3],
            'torvenyes_kepviselo'=>$row[4]
                      
                        
        ]);
    }
}
