<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterAllUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('Phone', 30)->nullable();
            $table->string('Sex', 10)->nullable();
            $table->string('ContactAddress', 200)->nullable();

            $table->string('provider_id', 100)->nullable();
            $table->string('provider', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('Phone');
           $table->dropColumn('Sex');
           $table->dropColumn('ContactAddress');

            $table->dropColumn('provider');
            $table->dropColumn('provider_id');
        });
    }
}
