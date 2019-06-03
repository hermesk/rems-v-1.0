<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payments_receipt extends Model
{
     protected $fillable =['receiptno','name','type','mode','amount','narration','amount_in_words','mobile'];
}
