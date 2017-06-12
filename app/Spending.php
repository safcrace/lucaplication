<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
  protected $fillable = ['company_id', 'description', 'exempt', 'type_quantity_percentaje_custom', 'amount_to_aply',
                          'accounting_acount_exempt', 'tax_acount_exempt', 'accounting_acount_affection', 'tax_acount_affection',
                          'accounting_acount_remaining', 'tax_acount_remaining'];
}
