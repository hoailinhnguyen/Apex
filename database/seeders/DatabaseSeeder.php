<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 'ddc7444a-bf32-11ec-9d64-0242ac120002',
            'page_id' => 21604053443,
            'page_name' => 'Page Name',
            'messenger_id' => 40821824222,
            'fb_full_name' => 'Nhi Nguyen',
            'user_name' => 'nhi',
            'password' => 'AHI12ASA2328FJDK',
            'user_full_name' => 'Nguyễn Đình Nhì',
            'group' => 'Admin',
            'pos_group' => 'All',
            'permission' => 'admin',
            'user_phone' => '84399558811',
            'province_id' => '01',
            'user_location_province' => 'Hà Nội',
            'district_id' => '005',
            'user_location_district' => 'Cầu Giấy',
            'address' => '333 cầu Giấy',
            'bank_id' => '970407',
            'user_bank_name1' => 'Techcombank',
            'user_bank_account_number1' => '0399558811',
            'bank_id2' => '970422',
            'user_bank_name2' => 'MBBank',
            'user_bank_account_number2' => '0399558811',
            'telegram_user_name' => 'nhindx',
            'telegram_user_id' => '11111111',
            'telegram_chat_id' => '11111111111',
            'change_pwd_1st_login' => '1',
            'Verify' => '1',
        ]);
    }
}
