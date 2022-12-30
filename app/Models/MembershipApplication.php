<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipApplication extends Model
{
    use HasFactory;
    protected $table ='membership_applications';
    protected $fillable = [
        'application_id',
        'name',
        'idNumber',
        'idImage',
        'email',
        'phone',
        'churchMembershipNumber',
        'department',
        'service',
        'status',
    ];
}
