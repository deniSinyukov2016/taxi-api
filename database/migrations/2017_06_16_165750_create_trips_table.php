<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('comment')->nullable();
            $table->string('description')->nullable();
            $table->string('date');
            $table->integer('init_id');
            $table->integer('accept_id');
            $table->boolean('accepted')->default(0);
            $table->boolean('rated')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });

        Schema::create('trip_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trip_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->enum('role', ['initiator', 'acceptor']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trip_user');
        Schema::dropIfExists('trips');
    }
}
