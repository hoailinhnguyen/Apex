<?php

namespace App\Models;

use App\Builders\UserBuilder;
use App\Supports\Traits\HasUuid;
use App\Supports\Traits\OverridesBuilder;
use App\Supports\Traits\UserStamps;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasUuid, OverridesBuilder, HasFactory, SoftDeletes;
    public function provideCustomBuilder()
    {
        return UserBuilder::class;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
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
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
