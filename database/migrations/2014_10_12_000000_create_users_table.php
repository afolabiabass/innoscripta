<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable
 */
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
            $table->increments('id');

            $table->string('name');
            $table->longText('avatar')->nullable();
            $table->string('phone')->nullable();

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();


            $table->string('provider')->nullable()->default('email');
            $table->string('provider_id')->nullable();

            $table->tinyInteger('status')->nullable()->default(1);

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
