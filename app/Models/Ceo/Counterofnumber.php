<?php

namespace App\Models\Ceo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counterofnumber extends Model
{
    use HasFactory;
    protected $fillable = [
        'successful_consultation_count',
        'satisfied_customer_count',
        'created_website_count',
        'expert_advisor_count',
    ];

}
