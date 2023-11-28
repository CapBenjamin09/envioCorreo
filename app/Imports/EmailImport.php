<?php

namespace App\Imports;

use App\Models\Email;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmailImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Email([
            'name'  => $row['name'],
            'email' => $row['email'],
            'certificate_number' => $row['certificate_number'],
            'expiring_date' => $row['expiring_date'],
            'status'    => 'Cargado',
        ]);
    }

    public function batchSize(): int
    {
        return 100;
    }
}
