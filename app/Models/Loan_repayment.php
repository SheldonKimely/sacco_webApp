<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan_repayment extends Model
{
    use HasFactory;
    protected $table = 'loans';
    protected $fillable = ['id','loan_id','amount','date_paid'];
}
