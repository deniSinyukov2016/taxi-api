<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('api_token', 60)->unique();
            $table->string('device_token')->unique();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('relationship')->nullable();
            $table->string('city', 255);
            $table->text('more', 255)->nullable();
            $table->boolean('is_vehicle_owner');
            $table->integer('radius');
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->string('transports')->nullable();
            $table->string('avatar')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('google_id')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });

        Schema::create('followers', function (Blueprint $table) {
            $table->integer('following_id')->unsigned()->index();
            $table->integer('follower_id')->unsigned()->index();
            $table->foreign('following_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->unique(['following_id', 'follower_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('followers');
        Schema::dropIfExists('users');
    }
}
