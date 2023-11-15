<?php

namespace App\Exports;

use App\Models\Game;
use Maatwebsite\Excel\Concerns\FromCollection;

class GamesExport implements FromCollection
{
    public function collection()
    {
        return Game::all();
    }
}