<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('page_id')->nullable();
            $table->string('page_name')->nullable();
            $table->integer('messenger_id')->nullable();
            $table->string('fb_full_name')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->string('user_full_name')->nullable();
            $table->string('group')->nullable();
            $table->string('pos_group')->nullable();
            $table->string('permission')->nullable();
            $table->integer('user_phone')->nullable();
            $table->integer('province_id')->nullable();
            $table->string('user_location_province')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('user_location_district')->nullable();
            $table->string('address')->nullable();
            $table->integer('bank_id')->nullable();
            $table->string('user_bank_name1')->nullable();
            $table->integer('user_bank_account_number1')->nullable();
            $table->integer('bank_id2')->nullable();
            $table->string('user_bank_name2')->nullable();
            $table->integer('user_bank_account_number2')->nullable();
            $table->string('telegram_user_name')->nullable();
            $table->integer('telegram_user_id')->nullable();
            $table->integer('telegram_chat_id')->nullable();
            $table->integer('change_pwd_1st_login')->nullable();
            $table->integer('Verify')->nullable();

            $table->string('created_by')->nullable()->index();
            $table->string('updated_by')->nullable()->index();
            $table->string('deleted_by')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
