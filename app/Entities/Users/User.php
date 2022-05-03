<?php

namespace App\Entities\Users;

use App\Supports\Traits\HasUuid;
use App\Supports\Traits\UserStamps;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Prettus\Repository\Traits\TransformableTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Class User.
 *
 * @package namespace App\Entities\Users;
 */
class User extends Authenticatable implements JWTSubject
{
    use Notifiable, TransformableTrait, HasUuid, HasTimestamps, HasFactory, UserStamps;

    public $incrementing = false;

    protected $table = 'users';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'page_name',
        'messenger_id',
        'fb_full_name',
        'user_name',
        'password',
        'user_full_name',
        'group',
        'pos_group',
        'permission',
        'user_phone',
        'province_id',
        'user_location_province',
        'district_id',
        'user_location_district',
        'address',
        'bank_id',
        'user_bank_name1',
        'user_bank_account_number1',
        'bank_id2',
        'user_bank_name2',
        'user_bank_account_number2',
        'telegram_user_name',
        'telegram_user_id',
        'telegram_chat_id',
        'change_pwd_1st_login',
        'Verify',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    /**
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute(string $value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
