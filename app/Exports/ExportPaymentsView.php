<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Payment;

class ExportPaymentsView implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('reports.transactions.pmntable', [
            'payments' => Payment::paginate(15)

         
        ]);
    }
}
