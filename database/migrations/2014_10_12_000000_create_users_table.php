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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('country');
            $table->string('image')->nullable();
            $table->bigInteger('personal_number');
            $table->boolean('status')->default(true)->comment("1-Active, 0-Deactive");
            $table->tinyInteger('role')->default(2)->comment("1-Admin, 2-User");
            $table->string('age');
            $table->string('frequency')->nullable();
            $table->string('gender');
            $table->string('weigh');
            $table->string('blood_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
