<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $table = 'loans';
    protected $fillable = ['id','nid','groupname','date_awarded','principal','interest','amount','loan_status'];
}
