<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFamiliarAsToUsersConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('connection_statuses', function (Blueprint $table) {
            $table->string("user_two_familiar_as")->nullable()->after("status");
            $table->string("user_one_familiar_as")->nullable()->after("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('connection_statuses', function (Blueprint $table) {
            
            Schema::dropIfExists('users_connections');

        });
    }
}
