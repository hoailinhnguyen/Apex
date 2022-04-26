<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('full_name')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('card_full_name')->nullable();
            $table->integer('card_number')->nullable();
            $table->date('card_expiration_date')->nullable();
            $table->integer('card_cif')->nullable();
            $table->integer('card_limit')->nullable();
            $table->integer('account_number')->nullable();
            $table->integer('card_phone')->nullable();
            $table->date('statement_date')->nullable();
            $table->boolean('option_date')->nullable();
            $table->boolean('card_type')->nullable();
            $table->integer('description')->nullable();

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
        Schema::dropIfExists('customer');
    }
}
