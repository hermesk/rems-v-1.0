<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactions_receipt extends Model
{
    protected $fillable =['receiptno','name','type','location','size','plotno','cost','mode','amount','date','narration','amount_in_words'];
}
