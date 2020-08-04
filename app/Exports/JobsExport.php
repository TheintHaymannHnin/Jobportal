<?php

namespace App\Exports;

use App\Job;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class JobsExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return Job::all();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Category',
            'Company',
            'Type',
            'Position',
            'Salary',
            'Requirement',
            'Description',
        ];
    }

    public function map($job): array
    {
        return [
            $job->name,
            $job->category->name,
            $job->company->name,
            $job->type->name,
            $job->position,
            $job->salary,
            $job->requirement,
            $job->description,
        ];
    }
}


