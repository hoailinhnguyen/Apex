<?php

namespace App\Validators\Customer;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class CustomerValidator.
 *
 * @package namespace App\Validators\Customer;
 */
class CustomerValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'full_name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'city_id'=> 'required',
            'district_id'=> 'required',
            'card_full_name'=> 'required',
            'card_number'=> 'required',
            'card_expiration_date'=> 'required',
            'card_cif'=> 'required',
            'card_limit'=> 'required',
            'account_number'=> 'required',
            'card_phone'=> 'required',
            'statement_date'=> 'required',
            'option_date'=> 'required',
            'card_type'=> 'required',
            'description'=> 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'full_name'=> 'sometimes',
            'phone'=> 'sometimes',
            'address'=> 'sometimes',
            'city_id'=> 'sometimes',
            'district_id'=> 'sometimes',
            'card_full_name'=> 'sometimes',
            'card_number'=> 'sometimes',
            'card_expiration_date'=> 'sometimes',
            'card_cif'=> 'sometimes',
            'card_limit'=> 'sometimes',
            'account_number'=> 'sometimes',
            'card_phone'=> 'sometimes',
            'statement_date'=> 'sometimes',
            'option_date'=> 'sometimes',
            'card_type'=> 'sometimes',
            'description'=> 'sometimes',
        ],
    ];
}
