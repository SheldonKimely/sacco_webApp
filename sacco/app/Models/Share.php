<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;
    protected $table = 'shares';
    protected $fillable = ['id','nid','groupname','date_paid','amount','contribution'];
}
