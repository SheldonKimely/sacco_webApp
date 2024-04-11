<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppliedLoan extends Model
{
    use HasFactory;
    protected $table ='loans_applied';
    protected $fillable = [
        'nid',
        'amount',
        'gname',
        'gnid',
        'gaddress',
        'gphone',
    ];
}
