<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class GamesExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}