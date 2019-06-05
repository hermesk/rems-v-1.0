<?php

namespace App\Exports;

use App\Transaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportTransactionsView implements FromView
{
    public function view(): View
    {
        return view('reports.transactions', [
            'trxs' => Transaction::paginate(15)
         
        ]);
    }
}
