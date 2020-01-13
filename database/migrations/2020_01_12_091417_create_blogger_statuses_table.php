<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloggerStatusesTable extends Migration
{

    public function up()
    {
        Schema::create('blogger_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("user_id", 320);
            $table->string("phone", 32);
            $table->string("youtube_channel", 320);
            $table->string("status", 500);
            $table->string("nickname", 320);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogger_statuses');
    }
}
