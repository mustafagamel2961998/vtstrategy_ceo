<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'domain',
        'company_name_ar',
        'company_name_en',

        'name',
        'job_title',
        'email',
        'mobile',

        'database_name',

        'start_subscription',
        'end_subscription',
        'otp',
        'politics_status',
        'status'
    ];

    
}
