<?php

namespace App\Entities\Customer;

use App\Supports\Traits\HasUuid;
use App\Supports\Traits\UserStamps;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Customer.
 *
 * @package namespace App\Entities\Customer;
 */
class Customer extends Model implements Transformable
{
    use TransformableTrait, HasUuid, HasFactory, HasTimestamps, UserStamps;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
