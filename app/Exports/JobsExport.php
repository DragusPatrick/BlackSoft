<?php

namespace App\Exports;

use App\Job;
use Maatwebsite\Excel\Concerns\FromCollection;

class JobsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Job::all();
    }
}
