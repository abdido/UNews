<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('read_notifications', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_read');
            $table->unsignedBigInteger('notification_id');
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
            $table->foreign('notification_id')->references('id')->on('notifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('read_notifications');
    }
}
