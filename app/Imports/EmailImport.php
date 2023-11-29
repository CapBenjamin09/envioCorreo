<?php

namespace App\Imports;

use App\Models\Email;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class EmailImport implements ToModel, WithHeadingRow, WithUpserts, WithBatchInserts, WithValidation
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
            'expiring_date' => Date::excelToDateTimeObject($row['expiring_date']),
            'status' => 'Cargado',
        ]);
    }

    public function rules(): array
    {
        return [
            '*.name' => [
                'required'
            ],
            '*.email' => [
                'required'
            ],
            '*.certificate_number' => [
                'required'
            ],
            '*.expiring_date' => [
                'required',
//                'date'
            ],
        ];
    }

    public function batchSize(): int
    {
        return 100;
    }

    public function uniqueBy()
    {
        return 'email';
    }


}
