<?php

namespace App\Exports;

use App\Transaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportTransactionsView implements FromView
{
    public function view(): View
    {
        return view('reports.trxtable', [
            'trxs' => Transaction::paginate(15)
         
        ]);
    }
}
