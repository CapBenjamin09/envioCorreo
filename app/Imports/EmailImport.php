<?php

namespace App\Imports;

use App\Models\Email;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class EmailImport implements ToModel, WithHeadingRow, WithBatchInserts, WithValidation, SkipsOnFailure
{

    use SkipsFailures;

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
            'dpi' => $row['dpi'],
            'certificate_number' => $row['certificate_number'],
            'request_date' => Date::excelToDateTimeObject($row['request_date']),
            'expiring_date' => Date::excelToDateTimeObject($row['expiring_date']),
            'status' => 'loaded',
        ]);
    }

    public function rules(): array
    {
        return [
            '*.name' => [
                'required'
            ],
            '*.email' => [
                'required',
//                'unique:emails'
            ],
            '*.dpi' => [
                'required',
//                'unique:emails',
                'digits:13',
            ],
            '*.certificate_number' => [
                'required',
                'unique:emails',
            ],
            '*.request_date' => [
                'required',
//                'date',
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

    public function onFailure(Failure ...$failures)
    {
        // TODO: Implement onFailure() method.
    }
}
