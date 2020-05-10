<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserInfoToCashouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cashouts', function (Blueprint $table) {
            $table->string('phone_number')->change();
            $table->string('bank_account_number')->change();
            $table->string('bank_name')->change();
            $table->string('account_name')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cashouts', function (Blueprint $table) {
            //
        });
    }
}
