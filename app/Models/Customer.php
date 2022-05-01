<?php

namespace App\Models;

use App\Supports\Traits\HasUuid;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory,HasUuid,HasTimestamps;

    protected $fillable = [
        'full_name',
        'phone',
        'address',
        'city_id',
        'district_id',
        'card_full_name',
        'card_number',
        'card_expiration_date',
        'card_cif',
        'card_limit',
        'account_number',
        'card_phone',
        'statement_date',
        'option_date',
        'card_type',
        'description',
    ];
}
